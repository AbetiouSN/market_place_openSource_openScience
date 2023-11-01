<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use App\Models\Skill;

class RecommendationController extends Controller
{
    public function recommendProjects(Request $request, $userId)
    {
        // Récupérez l'utilisateur pour lequel vous souhaitez faire des recommandations
        $user = User::find($userId); // Remplacez $userId par l'ID de l'utilisateur

        if ($user) {
            // Récupérez les compétences de l'utilisateur
            $userSkills = $user->searcher->skills;

            // Identifiez les utilisateurs similaires en fonction des compétences
            $similarUsers = User::select('users.id')
                ->join('searchers', 'users.id', '=', 'searchers.id_user')
                ->join('skills_need', 'searchers.id', '=', 'skills_need.searcher_id')
                ->whereIn('skills_need.skill_id', $userSkills->pluck('id'))
                ->where('users.id', '!=', $user->id)
                ->groupBy('users.id')
                ->orderByRaw('COUNT(skills_need.skill_id) DESC')
                ->limit(5) // Limitez le nombre d'utilisateurs similaires à afficher
                ->get();

            // Récupérez les projets associés aux utilisateurs similaires
            $recommendedProjects = [];
            foreach ($similarUsers as $similarUser) {
                $projects = User::find($similarUser->id)->creator->projects;
                $recommendedProjects = array_merge($recommendedProjects, $projects->toArray());
            }

            // Créez une réponse JSON
            return new JsonResponse([
                'status' => 'success',
                'recommended_projects' => $recommendedProjects,
            ]);
        } else {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Utilisateur non trouvé.',
            ]);
        }
    }
}

