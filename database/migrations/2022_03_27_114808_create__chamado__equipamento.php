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
        Schema::create('chamado_equipamento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('Chamado_id')->constrained('chamados');
            $table->foreignId('equipamento_id')->constrained('equipamentos');

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
        Schema::dropIfExists('_chamado__equipamento');
    }
};
