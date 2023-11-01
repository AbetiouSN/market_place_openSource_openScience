<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public function skillgotten()
{
    return $this->belongsToMany(Searcher::class, 'skills_gotten', 'skill_id', 'project_id');
}

}
