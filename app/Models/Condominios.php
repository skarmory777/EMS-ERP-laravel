<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condominios extends Model
{
    // public $timestamps = false;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    use SoftDeletes;

    protected $table = "condominios";

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 			
        'CODIGO_DO_CONDOMINIO',
        'NOME_DO_CONDOMINIO',
        'LOGRADOURO',
        'ENDERECO',
        'COMPLEMENTO',
        'BAIRRO',
        'MUNICIPIO',
        'ESTADO',
        'CEP',
        'TELEFONE',
        'CPF_CNPJ',
        'NATUREZA_JURIDICA',
        'DATA_DE_ABERTURA_INSCRICAO',
        'CNAE',
        'CODIGO_DA_NATUREZA_JURIDICA',
        'RAZAO_SOCIAL',
        'CODIGO_CLASSIFICACAO_TRIBUTARIA',
        'CEI',
        'SITUACAO_DO_CONDOMINIO',
        'CODIGO_FUNCIONARIOGERENTE',
        'CODIGO_DA_FILIAL',
        'SENHA_CONDOMINIO',
        'AREA_CONTRUIDA',
        'AREA_TOTAL',
        'LOGIN',
        'CODIGO_INTEGRACAO',
        'NUM_FUNCIONARIOS',
        'CODIGO_DO_TIPO_DE_FRACAO',
        'LOCAL_PAGAMENTO',
        'NAO_IMPRIMIR_CODIGO_BARRA',
        'NAO_GERAR_SENHA_BUREAUX',
        'COD_MUN_IBGE',
        'E_MAIL',
        'OBSERVACAO',
        'ESTAGIO',
        'DATA_ESTAGIO',
        'CODIGO_TIPO_CLIENTE',
        'GERAR_BALANCETE_BUREAUX',
        'CODIGO_FORMA_ENVIO',
        'SEQUENCIA_FORMA_ENVIO',
        'DATA_VERSAO_CADASTRA',
        'user_create_id', 'user_update_id', 'deleted_at', 'created_at', 'updated_at'
    ];

}
