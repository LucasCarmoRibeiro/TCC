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
<div class="container-fluid">
    <div class="row">
        <div class="col-11">



<form action=" {{ url('SalvarComputadores', ['Tipo'=>'Computador']) }}"  method="get" >
    @csrf

@for ($i = 1; $i <= $totalPC; $i++)
<div>
    <label for="nome">PC:</label>
    <input name="Computador[]" type="text" value="{{$i}}">


    <select name="Laboratorio[]">
@foreach ($Laboratorio as $item)
  <option  value="{{$item['id']}}"  >{{$item['name']}}</option>
@endforeach
    </select>

</div>

@endfor
<br>
<button type="submit" class="btn btn-primary">Salvar</button>

</form>

</div>
    </div>
</div>
@endsection
