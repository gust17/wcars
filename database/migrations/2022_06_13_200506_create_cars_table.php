<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('valor_fip');
            $table->decimal('compra');
            $table->string('vendedor');
            $table->string('cpf');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('ano');
            $table->integer('kilometragem');
            $table->string('rg');
            $table->string('telefone');
            $table->string('cep');
            $table->string('estado');
            $table->string('rua');
            $table->integer('n');
            $table->longText('complemento')->nullable();
            $table->longText('pix');
            $table->tinyInteger('licenciado');
            $table->tinyInteger('debito_doc');
            $table->decimal('total_debito')->nullable();


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
        Schema::dropIfExists('cars');
    }
}