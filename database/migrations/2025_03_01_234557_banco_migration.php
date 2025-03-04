<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('duplas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('usuario1_id')->constrained('users');
            $table->foreignId('usuario2_id')->constrained('users');
            $table->timestamps();
        });
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->string('imagem');
            $table->text('descricao');
            $table->text('stats');
            $table->enum('status', ['power', 'tricky', 'speed', 'technique', 'defense', 'all-around'])->default('tricky');
            $table->timestamps();
        });
        Schema::create('meio-campo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users');
            $table->foreignId('personagem1_id')->constrained('personagens');
            $table->foreignId('personagem2_id')->constrained('personagens');
            $table->timestamps();
        });
        Schema::create('meia-quadra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users');
            $table->foreignId('personagem1_id')->constrained('personagens');
            $table->timestamps();
        });
    } //

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
