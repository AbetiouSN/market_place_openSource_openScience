<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searcher extends Model
{
    use HasFactory;
    protected $fillable = ['CIN','F_Name', 'L_Name','date_Birth','Domain', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user','id');
    }
    public function skillgotten()
{
    return $this->belongsToMany(Skill::class, 'skills_gotten', 'project_id', 'skill_id');
}


}
