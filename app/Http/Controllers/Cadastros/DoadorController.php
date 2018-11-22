<?php

namespace App\Http\Controllers\Cadastros;

use App\Models\Cargo;
use App\Models\Colaborador;
use App\Models\Mensageiro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Doador;

class DoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doador::all();
        return view('cadastros.doador.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mensageiros = Colaborador::where('cargo_id',1)->get()->pluck('nome_completo','id');
        return view('cadastros.doador.formulario',compact('mensageiros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $doador = Doador::create($request->all());
        if($doador){
            return redirect()->route('doador.index');
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
        $doador = Doador::findOrFail($id);
        $mensageiros = Colaborador::where('cargo_id',1)->get()->pluck('nome_completo','id');
        return view('cadastros.doador.formulario',compact('doador','mensageiros'));
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

        Doador::find($id)->update($request->all());
        return redirect()->route('doador.index');
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
