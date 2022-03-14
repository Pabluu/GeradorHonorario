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
        Schema::create('cliente', function (Blueprint $table) {
            $table->string("ident_cliente", 14);
            $table->integer("valor");
            $table->string("razao_social", 100);
            $table->string("descricao", 100);
            $table->string("cep", 8);

            $table->primary(["ident_cliente", "valor"]);
            $table->foreign("cep")->references("cep")->on("localizacao");
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
        Schema::dropIfExists('cliente');
    }
};
