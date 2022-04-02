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
    <div class="col-12">

<form action="/Receber" method="get" >
    @csrf

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Digite o Numero TOTAL de computadores</label>
      <input type="number" name="TotalComputadores" class="form-control" id="numero" >

    </div>


    <button type="submit" class="btn btn-primary">Proximo passo</button>
  </form>

  </div>
  </div>
</div>





@endsection
