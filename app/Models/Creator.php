<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;
    protected $fillable = ['CIN','F_Name', 'L_Name', 'Domain','date_Birth','id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'id_creator');
    }
    public function skillgotten()
    {
        return $this->belongsToMany(SkillAdded::class, 'skillgotten', 'searcher_id', 'skill_id');
    }

}
