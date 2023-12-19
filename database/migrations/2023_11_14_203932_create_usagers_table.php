<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usagers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nomUsager');
            $table->string('nom');
            $table->string('prenom');
            $table->string('role');
            $table->rememberToken();                  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('usagers');
    }
};