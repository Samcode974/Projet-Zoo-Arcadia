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
        Schema::create('possede', function (Blueprint $table) {
            $table->string("utilisateur_username")->index();
            $table->unsignedBigInteger("role_id")->index();

            $table->foreign("utilisateur_username")->references("username")->on("utilisateurs")->onDelete("cascade");
            $table->foreign("role_id")->references("id")->on("role")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('possede');
    }
};
