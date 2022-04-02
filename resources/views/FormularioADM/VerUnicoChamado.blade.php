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
            <ul class="list-group">
                <li class="list-group-item active">Dados Chamado</li>
                <li class="list-group-item">local : {{$dadosver->nome_laboratorio}}</li>
                <li class="list-group-item">numero(s) do(s) PC(s) :

                    @foreach ($dadosver->equipamento as $item)
                    {{$item->Numero .','}}
                    @endforeach
                </li>
                <li class="list-group-item">Data de Abertura: {{$dadosver->data_abertura}}</li>

                descricao
                <textarea rows="5" cols="33" name="descricao"
                    disabled="disabled"> {{$dadosver->descricao_problema}}  </textarea>

            </ul>
        </div>
    </div>
</div>





<div class="container">

<form action="/updateChamado" method="GET">
    @csrf
    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                <div class="alert alert-danger" role="alert">
                    <li class="list-group-item">Titulo:

                        <select class="form-select"  disabled="disabled" name="titulo" aria-label="Default select example">
                       
                           
                            <option value="">{{$dadosver->titulo}}</option>
                          
                        </select>

                    </li>


                    <li class="list-group-item">Status:

                        <select class="form-select"   disabled="disabled" name="status" aria-label="Default select example">
                            

                            <option value="" > {{ $dadosver->status}}</option>
                         

                        </select>

                    </li>
                </div>
            </div>
        </div> 
</form>

</div>


<div class="container">
<div class="row">
<div class="col-12 ">
    <br>
    <ul class="list-group">
        <li class="list-group-item active">Dados do solicitante</li>
        <li class="list-group-item">Nome: {{$dadosver->nome_solicitante}}</li>
        <li class="list-group-item">email: {{$dadosver->email}}</li>


    </ul>
</div>
  </div>
</div>




@endsection