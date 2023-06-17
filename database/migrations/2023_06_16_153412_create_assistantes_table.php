<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('assistantes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_assist');
            $table->string('prenom_assist');
            $table->string('tel_assist');
            $table->string('email_assist')->unique();
            $table->string('password');
            $table->string('ville');
            $table->string('roles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{
        Schema::dropIfExists('assistantes');
    }
};
