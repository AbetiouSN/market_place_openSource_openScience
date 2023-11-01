<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectController extends Controller
{

    public function success($data, $message, $statusCode) {
        return response()->json(['data' => $data, 'message' => $message], $statusCode);
    }
    public function store_project(Request $request) {
        set_time_limit(120);
        // Vérifie si l'utilisateur est authentifié
        if (Auth::check()) {
            $user = Auth::user();
            //dd($user);
            if ($user->type === "creator") {
                $request->validate([
                    'pname' => 'required',
                    'desc' => 'required',
                    'id_creator' => 'required',
                ]);
    
                $project = Project::create($request->all());
                $project->save();
    
                return $this->success([$project], 'Votre projet est publié !', 200);
            } 
            else {
                return response()->json(['message' => 'An error occurred'], 500);
            }
        }
        else {
            return response()->json(['message' => 'User not authenticated'], 401);
         }
        // return $this->success([$user], 'Votre projet est publié !', 200); 
        //fin

        }
    

    
public function update(Request $request, int $id)
{
    //$user = Auth::user();

    // if ($user->type === "creator") {
        // $request->validate([
        //    'pname' => 'required',
        //     'desc' => 'required',
            
        // ]);

        $project = Project::findOrFail($id);
        $project->update($request->all());

        return response()->json($project, 200);
    // }

    // $project->update($request->all());
    // return response()->json($project, 200);
}
public function delete($id)
{
try {
    // Find the project
    $project = Project::findOrFail($id);

    // Delete the project
    $project->delete();

    return response()->json(['message' => 'Project deleted successfully'], 200);
} catch (ModelNotFoundException $e) {
    return response()->json(['message' => 'Project not found'], 404);
} catch (\Exception $e) {
    return response()->json(['message' => 'An error occurred'], 500);
}
}

public function show_all_project()
    {
        $projects = Project::all();

        return response()->json($projects);
    }


   
    public function sortByUserSkills(Request $request)
    {
        // Authentifiez l'utilisateur
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'Utilisateur non authentifié'], 401);
        }

        // Récupérez l'ID de l'utilisateur authentifié
        $userId = $user->id;

        // Recherchez les compétences obtenues par l'utilisateur dans la table skills_gotten
        $skillsGotten = \App\Models\Skill_gotten::where('searcher_id', $userId)->pluck('skill_id');

        // Recherchez les projets correspondants dans la table skills_need
        $projectIds = \App\Models\Skill_need::whereIn('skill_id', $skillsGotten)->pluck('project_id');

        // Récupérez les projets correspondants à ces ID de projet
        $projects = \App\Models\Project::whereIn('id', $projectIds)->get();

        // Renvoyez la liste des projets au format JSON
        return response()->json($projects);
    }




public function show($id)
{
try {
    // Find the project
    $project = Project::findOrFail($id);

    return response()->json($project, 200);
} catch (ModelNotFoundException $e) {
    return response()->json(['message' => 'Project not found'], 404);
} catch (\Exception $e) {
    return response()->json(['message' => 'An error occurred'], 500);
}
}



}