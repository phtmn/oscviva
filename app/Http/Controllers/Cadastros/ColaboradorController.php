<?php

namespace App\Http\Controllers\Cadastros;

use App\Models\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Colaborador;
use CRUDBooster;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Colaborador::latest()->get();
        return view('cadastros.colaborador.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all()->pluck('nome','id');
        return view('cadastros.colaborador.formulario',compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //dd($request->all());

        $colaborador = Colaborador::create($request->all());
        if($colaborador){
            return redirect()->to(CRUDBooster::adminpath(colaboradores));
        }else{
            return 'erro ao gravar';
        }
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
        $colaborador = Colaborador::findOrFail($id);
        $cargos = Cargo::all()->pluck('nome','id');
        return view('cadastros.colaborador.formulario',compact('colaborador','cargos'));
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

        Colaborador::find($id)->update($request->all());
        return redirect()->route('colaborador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
