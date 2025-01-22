<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\condominioUnidades;
use Condominiounidades as GlobalCondominiounidades;

class ApiCondominioUnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAll()
    {
        $registro = CondominioUnidades::all();
        return mb_convert_encoding($registro->toJson(), 'UTF-8', 'auto');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $registro = CondominioUnidades::where("id", $id)->get();

        if ($registro->count() == 0) {
            abort(500, "Unidade não encontrada.");
        }

        return mb_convert_encoding($registro->toJson(), 'UTF-8', 'auto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $registro = CondominioUnidades::create($request->all());
        return response()->json(["success"=>true, "msg"=>"Unidade adicionada ao Condomínio com sucesso!", "busca"=>$registro]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro = CondominioUnidades::where("id", $id)->get();

        if ($registro->count() == 0) {
            abort(500, "Unidade do Condomínio não encontrada.");
        }

        CondominioUnidades::find($id)->update($request->all());

        return response()->json(["success"=>true, "msg"=>"Unidade do condomínio alterado com sucesso!"]);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = CondominioUnidades::find($id);
        if ($registro->count()) {
            $registro->delete();
            return response()->json(["success"=>true, "msg"=>"Unidade do condomínio deletada com sucesso!"]);
        }
        return response()->json(["success"=>false, "msg"=>"Registro não encontrado"]);
    }
}
