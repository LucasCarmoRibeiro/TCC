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
<div class="container">
    <div class="row">
        <div class="alert alert-success" role="alert">
olá!, você está no Modo Edição De Computadores
        </div>
      <div class="col-12">

          <form action={{ url('UpdateComputador', ['id'=>$Equipamento->id]) }}  method="GET" >
    @csrf



            <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Numero do Computador</label>
      <input type="Numero" value="{{$Equipamento->Numero}}"  name="Numero"  class="form-control" >
             </div>


           

   <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">O NOME DO LABORATORIO</label>
      <select name="Laboratorio">
        @foreach ($laboratorios as $item)
          <option  value="{{$item->id}}"  >{{$item->name}}</option>
        @endforeach
            </select>
    </div>



  <button type="submit" class="btn btn-info">Atualizar Nome</button>
          </form>
       </div>
    </div>

  </div>

  @endsection
