<?php 
namespace App\Services;

use App\Models\Skill;
class AIService
{
public function recommendProjects($userSkills)
{
    // Récupérez les compétences depuis la base de données
    $skillsFromDatabase = Skill::pluck('sname')->toArray();

    // Logique de recommandation en utilisant les compétences de la base de données
    $recommendedProjects = [];
    foreach ($projects as $project) {
        $requiredSkills = $project['skills'];
        $matchCount = count(array_intersect($requiredSkills, $userSkills));

        // Vous pouvez ajuster ce seuil en fonction de vos critères de recommandation
        $matchThreshold = 2; // Par exemple, au moins 2 compétences correspondantes

        if ($matchCount >= $matchThreshold) {
            $recommendedProjects[] = $project['name'];
        }
    }

    return $recommendedProjects;
}
}
