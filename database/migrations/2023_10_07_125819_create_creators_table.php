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
        Schema::create('creators', function (Blueprint $table) {
            $table->id(); // This is an unsigned big integer by default
            $table->string('CIN')->unique()->nullable(false);
            $table->string('F_Name');
            $table->string('L_Name');
            $table->unsignedBigInteger('id_user')->nullable(false); // Change to unsignedBigInteger
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creators');
    }
};
