@extends('Bases.BaseComMenu')
@section('conteudo')
<?php 
@session_start();
 if(session('nivel_usuario') != 'admin'){ 
   echo "<script language='javascript'> window.location='./' </script>";
 }
 if(!isset($id)){
   $id = ""; 
   
 }
 ?>

<div class="alert alert-info" role="alert">
Seja Bem Vindo , Escolha Uma Das Opçoes
</div>


<div class="container">
  <div class="row">

    <div class="col-12 centrodiv">      
                
        <div class="col-1 card  divPC" style="width: 4cm; background-color:#4A1B82;">
            <br>
                <img src="{{asset('icones/computador.png')}}" height="35" width="35" class="icones rounded">

                <div class="card-body">
                    <a href="{{url('ListarDiretamenteChamados')}}"  class="text-light"> Ver os Chamados </a>
                <label class="text-light">  </label><br>
              </div>
        </div>

         
        <div class="col-1 card  divPC  " style="width: 4cm; background-color:#4A1B82;">
          <br>
              <img src="{{asset('icones/computador.png')}}" height="35" width="35" class="icones rounded">

              <div class="card-body">
                  <a href="{{url('ListarComputadores')}}" class="text-light">  Listar Computadores </a>
                 <label class="text-light">  </label><br>
                </div>
        </div>


        <div class="col-1 card  divPC  " style="width: 4cm; background-color:#4A1B82;">
          <br>
              <img src="{{asset('icones/computador.png')}}" height="35" width="35" class="icones rounded">

              <div class="card-body">
                  <a href="{{ url('VerLabsAdicionados') }}"  class="text-light">Adicionar Laboratorios</a>
                 <label class="text-light">  </label><br>
                </div>
        </div>

        <div class="col-1 card  divPC  " style="width: 4cm; background-color:#4A1B82;">
          <br>
              <img src="{{asset('icones/computador.png')}}" height="35" width="35" class="icones rounded">

              <div class="card-body">
                  <a href="{{ url('AdicionarUsuario') }}" class="text-light">Adicionar Usuarios</a>
                 <label class="text-light">  </label><br>
                </div>
        </div>

       
        <div class="col-1 card  divPC  " style="width: 4cm; background-color:#4A1B82;">
          <br>
              <img src="{{asset('icones/computador.png')}}" height="35" width="35" class="icones rounded">

              <div class="card-body">
                  <a href="{{ url('ShowOpcoes') }}" class="text-light" >Adicionar Opções</a>
                 <label class="text-light">  </label><br>
                </div>
        </div>

        <!--fim cards-->
       
       

    </div>
  </div>
</div>



  




@endsection