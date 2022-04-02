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
<div class="container-fluid">
    <div class="row">
        <div class="alert alert-success" role="alert">
olá!, você está no Modo Edição
        </div>
      <div class="col-8">

          <form action={{ url('UpdateLaboratorio', ['id'=>$laboratorio->id]) }}  method="get" >
    @csrf



            <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">DIGITE O NOME DO LABORATORIO</label>
      <input type="name" value="{{$laboratorio['name'] }}"  name="Name"  class="form-control" >
             </div>
  <button type="submit" class="btn btn-info">Atualizar Nome</button>
          </form>
       </div>
    </div>

  </div>

  @endsection
