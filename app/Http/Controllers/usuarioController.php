<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function login(Request $request)
{
    $CPF=$request->CPF;
    $Senha=$request->Senha;

   $usuarios = usuario::where('CPF', '=', $CPF)->where('senha', '=', $Senha)->first();

    if(@$usuarios->id != null){
        @session_start();
       /*
        $_SESSION['CPF'] =$CPF=$request->CPF;
        $_SESSION['id_usuario'] = $usuarios->id;
        $_SESSION['nome_usuario'] = $usuarios->nome;
        $_SESSION['nivel_usuario'] = $usuarios->nivel;
        */
        session(['CPF' => $usuarios->$CPF=$request->CPF]);
        session(['id_usuario' => $usuarios->id]);
        session(['nome_usuario' => $usuarios->nome]);
        session(['nivel_usuario' => $usuarios->nivel]);


     
       
        if( session('nivel_usuario') == 'admin'){
            return view('Painel-Adm.EscolhaADM');
        }
       
        if(session('nivel_usuario')== 'usuario'){
            return view('UsuariosTelas.indexUsuario');
        }
    }
        else {
return 'verifique a senha';
        }
         
       

}

public function logout(){
    @session_start();
    @session_destroy();
    session()->flush();
    return view('index');
 }




    public function PainelUsuario()
    {
        return view('UsuariosTelas.indexUsuario');
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

        $nome=$request->nome;
     $CPF=$request->CPF;
       $Senha=$request->Senha;
         $nivel=$request->nivel;

       
       usuario::create([
           'nome'=>$nome,
           'CPF'=>$CPF,
           'senha'=>$Senha,
           'nivel'=>$nivel
    
       ]);
        return view('index');
   
   
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
