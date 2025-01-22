<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Condominios;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.condominios.index');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $registro = new Condominios();

        return view('admin.condominios.create', compact('registro'));
    }

    /**
     * @param  \App\Http\Requests\Admin\CondominioStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Condominios($request->validated());

        $registro->save();

        return redirect()
            ->route('admin.condominios.index')
            ->with(['alert-success' => __('messages.created_success')]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condominio  $Condominio
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Condominios $registro)
    {
        return view('admin.condominios.show', compact('registro'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condominio  $Condominio
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Condominios $registro)
    {
        return view('admin.condominios.edit', compact('registro'));
    }

    /**
     * @param  \App\Http\Requests\Admin\CondominioUpdateRequest  $request
     * @param  \App\Condominio  $Condominio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condominios $registro)
    {
        $registro->update($request->validated());

        return redirect()
            ->route('admin.condominios.index')
            ->with(['alert-success' => __('messages.updated_success')]);
    }
}
