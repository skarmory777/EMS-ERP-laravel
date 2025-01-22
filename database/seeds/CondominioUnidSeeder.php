<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\condominioUnidades;

class CondominioUnidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $condominios = new condominios([
        //     'CODIGO_DO_CONDOMINIO' => 1,
        //     'NOME_DO_CONDOMINIO' => 'Alvorada',
        //     'NATUREZA_JURIDICA' => '2',
        // ]);

        // $condominios->save();

        $condominioUnidades = new condominioUnidades([
            'condominio_id' => 1,
            'complemento_unidade' => 'Bloco A, Ap 101',
            'codigo_do_tipo_de_usuario' => 2,
            'area_privativa' => 80.5,
            'area_comum' => 20.0,
            'departamento_juridico' => false,
            'recibo_bloqueado' => false,
            'senha_unidade' => bcrypt('123456'),
            'morador' => 'João da Silva',
            'usuario_etiqueta' => 'J. Silva',
            'codigo_do_condomino' => 1001,
            'login' => 'joao.silva',
            'senha' => bcrypt('senha123'),
            'ir_anual' => 1500.75,
            'observacao' => 'Nada consta.',
        ],
        [
            'condominio_id' => 1,
            'complemento_unidade' => 'Bloco B, Ap 202',
            'codigo_do_tipo_de_usuario' => 3,
            'area_privativa' => 100.0,
            'area_comum' => 30.5,
            'departamento_juridico' => true,
            'recibo_bloqueado' => true,
            'senha_unidade' => bcrypt('654321'),
            'morador' => 'Maria Oliveira',
            'usuario_etiqueta' => 'M. Oliveira',
            'codigo_do_condomino' => 1002,
            'login' => 'maria.oliveira',
            'senha' => bcrypt('senha456'),
            'ir_anual' => 2000.00,
            'observacao' => 'Pendência jurídica em andamento.',
    ]);
    $condominioUnidades->save();
    }
}
