<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill_need extends Model
{
    use HasFactory;

    protected $table = 'skills_need'; // Nom de la table dans la base de données
    protected $primaryKey = ['searcher_id', 'skill_id']; // Clé primaire composite

    protected $fillable = [
        'searcher_id',
        'skill_id',
    ];

    // protected $guarded = ['id']; // Attributs que vous ne voulez pas permettre à l'utilisateur de remplir

    public function creator()
{
    return $this->belongsToMany(Creator::class, 'skills_need', 'skill_id', 'creator_id')
        ->withPivot('created_at', 'updated_at');
}


    public function skill()
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }
    
    public function creators()
    {
        return $this->belongsToMany(Creator::class, 'skill_need', 'skill_id', 'creator_id');
    }
}
