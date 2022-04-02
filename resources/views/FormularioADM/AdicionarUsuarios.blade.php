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

<form action="/AdicionarUsuario" method="POST">

<div class="container">
    <div class="row">
        <div class="col-12">
@csrf


<div class="mb-3">
  <label for="name" class="form-label">Nome</label>
  <div id="CPF" class="form-text" >Digite seu nome</div>
  <input type="text" name="nome" class="form-control">

</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">CPF</label>
  <div id="CPF" class="form-text" >Digite seu CPF</div>
  <input type="text" name="CPF" class="form-control">

</div>



<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Senha</label>
  <div id="Senha" class="form-text">Digite sua senha</div>
  <input type="text" name="Senha" class="form-control" id="exampleInputPassword1">
</div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tipo do Usuario</label>


    <select class="form-control form-control-sm" name="nivel" >
        <option>admin</option>
        <option>usuario</option>

    </select>

<button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
     </div>
</div>
</div>
</form>


@endsection
