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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('roles_id')->constrained();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('picture')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('RCCM')->nullable();
            $table->string('IFU')->nullable();
            $table->string('nomRepresentant')->nullable();
            $table->string('prenomRepresentant')->nullable();
            $table->string('emailRepresentant')->nullable()->unique();
            $table->integer('telephoneRepresentant')->nullable();
            $table->string('CNI')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
