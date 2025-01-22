<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class condominioUnidades extends Model
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

    protected $table = "condominiounidades";

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 		
        'condominio_id',
        'complemento_unidade',
        'codigo_do_tipo_de_usuario',
        'area_privativa',
        'area_comum',
        'departamento_juridico',
        'recibo_bloqueado',
        'senha_unidade',
        'morador',
        'usuario_etiqueta',
        'codigo_do_condomino',
        'login',
        'senha',
        'ir_anual',
        'observacao',
        'codigo_integracao',
        'created_at', 'updated_at'    
    ];



    
}
