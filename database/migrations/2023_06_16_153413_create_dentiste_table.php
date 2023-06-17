<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('dentistes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_dent');
            $table->string('prenom_dent');
            $table->string('tel_dent');
            $table->string('email_dent')->unique();
            $table->string('password');
            $table->string('ville');
            $table->string('adresse');
            $table->string('roles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('dentiste');
    }
};
