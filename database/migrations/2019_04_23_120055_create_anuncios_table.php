<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('anuncios');
        Schema::create('anuncios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->increments('id');
            $table->unsignedInteger('id_usuario');            
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->string('titulo', 100);
            $table->text('descricao');
            $table->double('valor', 5, 2);
            $table->string('estado', 10);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncios');
    }
}
