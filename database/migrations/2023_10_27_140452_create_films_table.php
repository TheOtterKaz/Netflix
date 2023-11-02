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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);            
            $table->string('resume', 500);
            $table->string('brand', 250);
            $table->string('collection', 250);
            $table->integer('cote');
            $table->string('rating', 50);
            $table->integer('duree');
            $table->integer('annee');
            $table->foreignId('realisateur_id')->constrained('personnes');
            $table->foreignId('producteur_id')->constrained('personnes');
            $table->string('type', 300);
            $table->string('imageFilm', 2048);
            $table->string('lienFilm', 2048);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
