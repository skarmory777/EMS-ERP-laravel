<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCondominios extends Migration
{
    public function up()
    {
        Schema::create('condominios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('CODIGO_DO_CONDOMINIO');
            $table->string('NOME_DO_CONDOMINIO', 50)->nullable();
            $table->string('LOGRADOURO', 15)->nullable();
            $table->string('ENDERECO', 35)->nullable();
            $table->string('COMPLEMENTO', 35)->nullable();
            $table->string('BAIRRO', 20)->nullable();
            $table->string('MUNICIPIO', 20)->nullable();                                                
            $table->string('ESTADO', 2)->nullable();            
            $table->string('CEP', 9)->nullable();            
            $table->string('TELEFONE', 20)->nullable();            
            $table->string('CPF_CNPJ', 20)->nullable();
            $table->string('NATUREZA_JURIDICA', 1);
            $table->date('DATA_DE_ABERTURA_INSCRICAO')->nullable();
            $table->string('CNAE', 9)->default('8112-5/00');
            $table->string('CODIGO_DA_NATUREZA_JURIDICA', 5)->default('308-5');
            $table->string('RAZAO_SOCIAL', 100)->nullable();
            $table->string('CODIGO_CLASSIFICACAO_TRIBUTARIA', 2)->default('99');
            $table->string('CEI', 20)->nullable();
            $table->string('SITUACAO_DO_CONDOMINIO', 1)->nullable();
            $table->integer('CODIGO_FUNCIONARIOGERENTE')->nullable();
            $table->integer('CODIGO_DA_FILIAL')->nullable();
            $table->string('SENHA_CONDOMINIO', 20)->nullable();
            $table->float('AREA_CONTRUIDA')->nullable();
            $table->float('AREA_TOTAL')->nullable();
            $table->string('LOGIN', 20)->nullable();
            $table->string('CODIGO_INTEGRACAO', 20)->nullable();
            $table->integer('NUM_FUNCIONARIOS')->nullable();
            $table->integer('CODIGO_DO_TIPO_DE_FRACAO')->nullable();
            $table->string('LOCAL_PAGAMENTO', 20)->nullable();
            $table->integer('NAO_IMPRIMIR_CODIGO_BARRA')->nullable();                        
            $table->integer('NAO_GERAR_SENHA_BUREAUX')->nullable();                        
            $table->integer('COD_MUN_IBGE')->nullable();
            $table->string('E_MAIL', 40)->nullable();
            $table->string('OBSERVACAO', 1024)->nullable();
            $table->string('ESTAGIO', 1)->default('O');                     
            $table->date('DATA_ESTAGIO')->nullable();
            $table->integer('CODIGO_TIPO_CLIENTE')->nullable();
            $table->string('GERAR_BALANCETE_BUREAUX', 1)->default('S');                       
            $table->integer('CODIGO_FORMA_ENVIO')->nullable();
            $table->integer('SEQUENCIA_FORMA_ENVIO')->nullable();            
            $table->date('DATA_VERSAO_CADASTRAL')->nullable();
            $table->timestamps();
        });

        Schema::table('condominios', function (Blueprint $table) {
            $table->softDeletes();  // Adiciona a coluna deleted_at
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('condominios', function (Blueprint $table) {
            $table->dropSoftDeletes();  // Remove a coluna deleted_at
        });        
        Schema::dropIfExists('condominios');        
    }  
}
