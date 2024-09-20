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
        Schema::create('comporte', function (Blueprint $table) {
            $table->unsignedBigInteger("habitat_id")->index();
            $table->unsignedBigInteger("image_id")->index();
            $table->timestamps();

            $table->foreign("habitat_id")->references("id")->on("habitats")->onDelete("cascade");
            $table->foreign("image_id")->references("id")->on("images")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comporte');
    }
};
