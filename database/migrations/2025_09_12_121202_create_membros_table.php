<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo',30);
            $table->string('endereco',30);
            $table->integer('telefone');
            $table->date('data_cadastro');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('membros');
    }
};
