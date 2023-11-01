<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skills_need', function (Blueprint $table) {
            $table->unsignedBigInteger('searcher_id');
            $table->unsignedBigInteger('skill_id');
           
    
            // Définition de la clé primaire composite
            $table->primary(['searcher_id', 'skill_id']);
    
            // Définition des clés étrangères vers les tables correspondantes
            $table->foreign('searcher_id')->references('id')->on('searchers');
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills_need');
    }
};
