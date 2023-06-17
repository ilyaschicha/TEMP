<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('administrateur', function (Blueprint $table) {
            $table->id();
            $table->string('nom_admin');
            $table->string('prenom_admin');
            $table->string('tel_admin');
            $table->string('email_admin')->unique();
            $table->string('password');
            $table->string('ville');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('administrateur');
    }
};
