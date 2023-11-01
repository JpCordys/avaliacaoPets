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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('especie');
            $table->string('nome');
            $table->string('porte');
            $table->integer('codigo');
            $table->string('img');
            $table->double('peso', 3,1);
            $table->integer('idade');
            $table->string('local');
            $table->string('sobre');
            $table->string('genero');
            $table->string('raca');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
