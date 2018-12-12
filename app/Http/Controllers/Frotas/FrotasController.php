<?php

namespace App\Http\Controllers\Frotas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frotas;

class FrotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nome ='teste33333';
        return view ('frotas.index', ['nome'=>$nome]);//
    }

    public function cadastro()
    {
        $nome ='teste33333';
        return view ('frotas.cadastro', ['nome'=>$nome]);//
    }
    
    public function cadveiculo()
    {
        $nome = 'teste';
        return view ('frotas.cadveiculo', ['nome'=>$nome]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $frotas = Frotas::all();
        return view('frotas.cadveiculo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frotas = Frotas::create($request->all());
        if($frotas){
            return redirect()->route('frotas.cadveiculo');
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
        return view ('frotas.cadveiculo');
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
        //
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
