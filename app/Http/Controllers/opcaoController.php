<?php

namespace App\Http\Controllers;

use App\Models\opcao;
use Illuminate\Http\Request;

class opcaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // print_r($request->all());

        opcao::create([
            'opcao'=>$request->NomeOpcao,
        ]);

        $todasopcoes= opcao::all();

        return view('FormularioADM.adicionarOpcoes',['todasOpcoes'=>$todasopcoes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $todasopcoes= opcao::all();
        return view('FormularioADM.adicionarOpcoes',['todasOpcoes'=>$todasopcoes]);

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
       
       $laboratorios= opcao::find($id);
       $laboratorios->delete();
       return redirect('/ShowOpcoes');;

    }
}
