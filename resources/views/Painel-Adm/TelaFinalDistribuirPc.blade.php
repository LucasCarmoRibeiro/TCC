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
<br>
<br>
<div class="container">
    <div class="row">


        <div class="col-4 col-sm-2 ">
            <img src="{{asset('Imagem/toto.png')}}" class="rounded-circle" width="150px" alt="10">
        </div>

        <div class="col-6   col-sm-6">
            <div class="alert alert-success" role="alert">
                <p>Laboratorios e Computadores Foram Cadastrados Com Sucesso. <br> </p>
                <p>Se quiser conferir se está tudo certo. <br> </p>
<p><a href="{{url('ListarComputadores')}}"> Ver Computadores </a> </p>
<p><a href="{{url('VerLabsAdicionados')}}"> Ver Laboratorios</a> </p>

            </div>


        </div>
    </div>
</div>

@endsection