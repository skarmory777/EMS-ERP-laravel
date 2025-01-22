<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Condominiounidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominiounidades', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->integer('condominio_id')->unsigned();   
            $table->foreign('condominio_id')->references('id')->on('condominios');         
            $table->string('complemento_unidade', length: 100);
            $table->string('codigo_do_tipo_de_usuario');
            $table->decimal('area_privativa', total: 10, places: 2);
            $table->decimal('area_comum', total: 10, places: 2);
            $table->boolean('departamento_juridico')->nullable($value = false);
            $table->boolean('recibo_bloqueado')->nullable($value = false);
            $table->string('senha_unidade')->nullable();
            $table->string('morador');
            $table->tinyText('usuario_etiqueta')->nullable();
            $table->integer('codigo_do_condomino');
            $table->string('login', length: 20)->nullable();
            $table->string('senha', length: 20)->nullable();
            $table->tinyInteger('ir_anual')->nullable($value = false);
            $table->string('observacao')->nullable();
            $table->string('codigo_integracao', length: 20)->nullable();            
            $table->timestamps();
            $table->softDeletes();  // Adiciona a coluna deleted_at
        });

        Schema::table('condominioUnidades', function (Blueprint $table) {
            
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('condominioUnidades', function (Blueprint $table) {
            $table->dropSoftDeletes();  // Remove a coluna deleted_at
        });    

        Schema::dropIfExists('condominiounidades');        
    }
}
