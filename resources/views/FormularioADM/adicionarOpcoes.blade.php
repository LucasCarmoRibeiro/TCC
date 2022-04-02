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
     
     
          <form action="/AdicionarOpcoes" method="GET" >
    @csrf
<br>
             <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Digite as opção que deseja adicionar</label>
      <input type="text" name="NomeOpcao" class="form-control"  >
             </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
       </div>
    </div>

  </div>











  <div class="container">

    @if(!empty($todasOpcoes))
    
    
    <div class="row"> <!--Listar Laboratorios-->
    
    <table class="table">
        <thead>
          <tr>
    <th scope="col">ID</th>
    <th scope="col">Nome</th>
    <th scope="col">Exluir</th>
          </tr>
    </thead>
    @foreach ($todasOpcoes as $item)
         <tbody>
          <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item->opcao}}</td>    
            <td><a type="button" class="btn btn-danger" href="{{ url('/ExcluirOpcao',['id' => $item['id'] ]) }}"> Excluir </a></td>
          </tr>
    
        </tbody>
    @endforeach
    
    </table>
    </div>
    
      @endif
    </div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-10 col-12 ">
            <a type="button" class="btn btn-success" href="{{ url('/AcãoAdministrador') }}"> Pronto </a>
        </div>
    </div>

</div>




@endsection