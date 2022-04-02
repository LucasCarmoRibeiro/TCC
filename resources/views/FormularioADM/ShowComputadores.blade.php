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


    
<div class="row"> <!--Listar Laboratorios-->
<div class="col-11"> 
    <table class="table">
        <thead>
          <tr>
    <th scope="col">ID</th>
    <th scope="col">tipo</th>
    <th scope="col">Numero</th>
    <th scope="col">Laboratorio</th>

    <th scope="col">Editar</th>
    <th scope="col">Exluir</th>
          </tr>
    </thead>


    @foreach ($Equipamento as $item)
         <tbody>
          <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['tipo']}}</td>
            <td>{{$item['Numero']}}</td>
            <td>{{ $item->laboratorios->name }}</td>

            <td> <a  type="button" class="btn btn-info" href="{{ url('/EditarComputadores',['id' => $item['id'] ]) }}"> Editar </a></td>
    
    
            <td><a type="button" class="btn btn-danger" href="{{ url('/ExcluirComputador',['id' => $item['id'] ]) }}"> Excluir </a></td>
          </tr>
    
        </tbody>
    @endforeach
    
    </table>
    </div>
  </div>
      
    </div>




   
    



@endsection