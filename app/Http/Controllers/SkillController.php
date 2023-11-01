<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Models\Project;
use App\Models\Searcher;
use App\Models\Skill;
use App\Models\Skill_need;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function searcher_show(){
    $user=Auth::user();
    $accesslevel=$user->type;
    if($accesslevel != "creator"){
        $searcher = Searcher::findOrFail($user->id);
        return response()->json($searcher);
    }
    else {
        return response()->json(['message' => 'User not authenticated'], 401);
    }
    
}

   public function show_profil_creator(String $id){
    $user=Auth::user();
    $accesslevel=$user->type;
    if($accesslevel != "creator"){
        $profile_creator = Creator::findOrFail($id);
        $content_creator = $profile_creator->project;
        return response()->json($profile_creator,$content_creator);
    }
    else{        
        return response()->json(['message' => ' ERROR !!!!! Vous etes un createur !!! '], 401);
    }
    
   }

   public function show_skill_drop_down(){
    $user=Auth::user();
    $accesslevel=$user->type;
    if($accesslevel != "creator"){
        $skills = Skill::all();
        return response()->json($skills);
    }
    else{        
        return response()->json(['message' => ' ERROR !!!!! Vous etes un createur !!! '], 401);
    }

   }


    public function serchaer_skills_add(Request $request){
        $user=Auth::user();
        $accesslevel=$user->type;
        if($accesslevel != "creator"){
            $request->validate([
                'id_searcher' => $user->id,
            ]);

            $skill_need = Skill_need::create($request->only('id_searcher'));
            $skill_need->save();
            return $this->success([$skill_need], ' Add skill  !', 200);
        }
    }

    public function adding_skills(Request $request){
        $user=Auth::user();
        $accesslevel=$user->type;
        if($accesslevel != "creator"){
            $request->validate([
                'sname' => $request->input('sname'),
            ]);

            $skill = Skill::create($request->only('id_searcher'));
            $skill->save();
            $request->validate([
                'id_searcher' => $user->id,
            ]);

            $skill_need = Skill_need::create($request->only('id_searcher'));
            $skill_need->save();
            
            return $this->success([$skill], ' Add skill  !', 200);
        }
    }
}
