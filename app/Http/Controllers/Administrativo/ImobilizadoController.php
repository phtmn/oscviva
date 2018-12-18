<?php

namespace App\Http\Controllers\Administrativo;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Imobilizado;

class ImobilizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Imobilizado::latest()->get();
        return view ('administrativo.imobilizado.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('administrativo.imobilizado.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //um array com as mensagens traduzidas para cada regra
        $messages = [
            'required'  => 'O campo :attribute é obrigatório', //mensagem para campos required
            'min'       => 'A quantidade de caracteres do campo :attribute é minima', //mensagem para campos min
            'string'    => 'O campo :attribute não é do tipo texto',
            'numeric'   => 'O campo :attribute não é do tipo moeda',
            'unique'    => 'O valor do campo :attribute já está em uso, escolha outro'
        ];

        /*
            OBS: não esquecer de dar use na classe Validator linha 5.
            Cria a validação passando os parametros  Validator::make($inputs,$regras,$mensagens)
        */
        $validator = Validator::make($request->all(),[  
            'codigo'    => 'required|min:3|string|unique:imobilizados',
            'descricao' => 'required|min:3',
            'valor'     => 'required|numeric',                   
        ],$messages);

        //se alguma regra falhar retorna erro!
        if($validator->fails()){

            return redirect()->back()       //back() = volta pra pagina anterior
                            ->withErrors($validator) // withErros() = retorna os erros de validação
                            ->withInput(); // withIput() = retorna com os campos preenchidos
        }        
        //se nenhuma regra falhar retorna sucesso
        $imobilizado = Imobilizado::create($request->all());
        return redirect()->route('imobilizado.index')->with('success','Registro inserido com sucesso!');
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
        $imobilizado = Imobilizado::find($id);
        return view('administrativo.imobilizado.formulario',compact('imobilizado'));
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
        $imobilizado = Imobilizado::find($id)->update($request->all());
        return redirect()->route('imobilizado.index');
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
