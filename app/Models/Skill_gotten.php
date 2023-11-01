<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill_gotten extends Model
{
    use HasFactory;
    public function skillgotten()
    {
        return $this->belongsToMany(Skill::class, 'skill_gotten', 'searcher_id', 'skill_id');
    }
}
