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
        Schema::create('redige', function (Blueprint $table) {
            $table->string("utilisateur_username")->index();
            $table->unsignedBigInteger("rapport_veterinaire_id")->index();
            
            $table->foreign("utilisateur_username")->references("username")->on("utilisateurs")->onDelete("cascade");
            $table->foreign("rapport_veterinaire_id")->references("id")->on("rapport_veterinaire")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redige');
    }
};
