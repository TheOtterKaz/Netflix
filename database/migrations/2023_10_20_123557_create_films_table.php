<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::dropIfExists('films');
        
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->string('resume', 500);
            $table->integer('rating');
            $table->integer('duree');
            $table->integer('annee');
            $table->string('type', 300);
            $table->string('imageFilm', 2048);
            $table->string('lienFilm', 2048);

            $table->unsignedBigInteger('realisateur');
            $table->foreign('realisateur')->references('id')->on('personnes');

            $table->unsignedBigInteger('producteur');
            $table->foreign('producteur')->references('id')->on('personnes');

            $table->unsignedBigInteger('acteurPrinc');
            $table->foreign('acteurPrinc')->references('id')->on('personnes');

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
