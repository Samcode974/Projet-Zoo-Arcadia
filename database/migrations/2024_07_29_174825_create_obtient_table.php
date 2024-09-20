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
        Schema::create('obtient', function (Blueprint $table) {
            $table->unsignedBigInteger("rapport_veterinaire_id")->index();
            $table->unsignedBigInteger("animal_id")->index();
            
            $table->foreign("rapport_veterinaire_id")->references("id")->on("rapport_veterinaire")->onDelete("cascade");
            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obtient');
    }
};
