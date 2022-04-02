<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->nullable($value = true);
            $table->string('nome_solicitante');
            $table->string('CPF');
            $table->string('email');
            $table->date('data_abertura');
            $table->date('data_fechamento')->nullable($value = true);
            $table->text('descricao_problema');
            $table->string('solucao')->nullable($value = true);
            $table->string('status');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
};
