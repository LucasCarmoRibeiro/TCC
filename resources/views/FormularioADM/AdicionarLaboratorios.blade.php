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

    <div class="col-8">
     
     
          <form action="/AdicionarLaboratorios" method="POST" >
    @csrf
<br>
             <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">DIGITE O NOME DO LABORATORIO</label>
      <input type="name" name="NomeLaboratorio" class="form-control" id="numero" >
             </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
       </div>
    </div>

  </div>




  <div class="container-fluid">

@if(!empty($laboratorios))


<div class="row"> <!--Listar Laboratorios-->

<table class="table">
    <thead>
      <tr>
<th scope="col">ID</th>
<th scope="col">Nome</th>
<th scope="col">Editar</th>
<th scope="col">Exluir</th>
      </tr>
</thead>
@foreach ($laboratorios as $item)
     <tbody>
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name']}}</td>
        <td> <a  type="button" class="btn btn-info" href="{{ url('/EditarLaboratorio',['id' => $item['id'] ]) }}"> Editar </a></td>


        <td><a type="button" class="btn btn-danger" href="{{ url('/ExcluirLaboratorio',['id' => $item['id'] ]) }}"> Excluir </a></td>
      </tr>

    </tbody>
@endforeach

</table>
</div>

  @endif
</div>
<!--proximo Passo-->

<div class="container">
    <div class="row">
         <div class="col-sm-5 offset-sm-10 ">
        <a type="button" class="btn btn-danger" href="{{ url('/AdicionarComputadores') }}"> Proximo Passo </a>


         </div>
    </div>
</div>




@endsection
