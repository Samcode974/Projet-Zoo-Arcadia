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
        Schema::create('dispose', function (Blueprint $table) {
            $table->unsignedBigInteger("animal_id")->index();
            $table->unsignedBigInteger("race_id")->index();

            $table->foreign("animal_id")->references("id")->on("animals")->onDelete("cascade");
            $table->foreign("race_id")->references("id")->on("race")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispose');
    }
};
