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
Chamados Listados Abaixos
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
     

     <div class="d-none d-sm-block">

    
      <table class="table  table-sm table-hover">
        <thead>
          <tr>
  
      
            <th scope="col">ID</th>

            <th scope="col">titulo</th>
            
            <th scope="col">Laboratório</th>

            <th scope="col">status</th>
            <th scope="col">Ver</th>
            <th scope="col">editar</th>

            <th scope="col">editado por</th>


          </tr>
        </thead>
        <tbody>
          @foreach ($dadosChamado as $chamado )
          <tr>
  
   <th scope="row">{{$chamado->id }}</th>
            <td>{{$chamado->titulo }}</td>
    
          
          <td>{{$chamado->nome_laboratorio}}</td>

            <td>{{$chamado->status}}</td>
            <td><a href="{{url('verChamado',[$chamado->id])}}"  type="button" class="btn btn-outline-info"> Ver </a> </td>

            <td><a href="{{url('EditarChamado',[$chamado->id])}}"  type="button" class="btn btn-outline-success"> editar </a> </td>
            

            <td>
              @if(!empty($chamado->responsavel))

              {{$chamado->responsavel}}</td>
           @else
           ninguem abriu
              @endif
         
            </tr>
        
          @endforeach
        </tbody>
      </table>
     </div>
    </div>
  </div>
</div>













<!--tabela para android-->



  <div class="container">
  <div class="row">
    <div class="col-12">
      <div class="table-responsive d-block d-sm-none">
        <div class="alert alert-info" role="alert">
tabela versão mobile
        </div>
      <table class="table  table-sm table-hover">
        <thead>
          <tr>
  
      
            <th scope="col">ID</th>

            <th scope="col">titulo</th>
            
            <th scope="col">Laboratório</th>

            <th scope="col">status</th>
            <th scope="col">Ver</th>
            <th scope="col">editar</th>

            
        </thead>
        <tbody>
          @foreach ($dadosChamado as $chamado )
          <tr>
  
   <th scope="row">{{$chamado->id }}</th>
            <td>{{$chamado->titulo }}</td>
          
          <td>{{$chamado->nome_laboratorio}}</td>
            <td>{{$chamado->status}}</td>

            <td><a href="{{url('verChamado',[$chamado->id])}}"  type="button" class="btn btn-outline-info"> Ver </a> </td>

            <td><a href="{{url('EditarChamado',[$chamado->id])}}"  type="button" class="btn btn-outline-success"> editar </a> </td>
            

           
            </tr>
        
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>














@endsection