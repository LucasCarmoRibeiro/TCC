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
<div class="container">
    <div class="row">

        <div class="col-12">
            <ul class="list-group">
                <li class="list-group-item active">Dados Chamado</li>
                <li class="list-group-item">local : {{$dadoschamadoeditar->nome_laboratorio}}</li>
                <li class="list-group-item">numero(s) do(s) PC(s) :

                    @foreach ($dadoschamadoeditar->equipamento as $item)
                    {{$item->Numero .','}}
                    @endforeach
                </li>
                <li class="list-group-item">Data de Abertura: {{$dadoschamadoeditar->data_abertura}}</li>

                descricao
                <textarea rows="5" cols="33" name="descricao"
                    disabled="disabled"> {{$dadoschamadoeditar->descricao_problema}}  </textarea>

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

                        <select class="form-select" name="titulo" aria-label="Default select example">
                            <option selected>Selecione um</option>
                            @foreach ($opcoes as $opcao2)
                            <option value="{{$opcao2->opcao}}">{{$opcao2->opcao}}</option>
                            @endforeach
                        </select>

                    </li>


                    <li class="list-group-item">Status:

                        <select class="form-select" name="status" aria-label="Default select example">
                            

                            <option value=""> {{$dadoschamadoeditar->status}}</option>
                            <option value="Pendente">Pendente</option>
                            <option value="Aberto">Aberto</option>
                            <option value="Fechado">Fechado</option>
                            <option value="Finalizado">Finalizado</option>

                        </select>

                    </li>
                </div>
                solução 
                <textarea rows="5" cols="40" name="solucao">   </textarea>
            </ul>

        </div>

    </div>
    <br>
    <br>
    <INPUT TYPE="hidden" NAME="responsavel" VALUE="{{$responsavel}}">

    <INPUT TYPE="hidden" NAME="id" VALUE="{{$dadoschamadoeditar->id}}">

    <button type="submit" class="btn btn-warning">Salvar</button>
</form>

</div>


<div class="container">
<div class="row">
<div class="col-12 ">
    <br>
    <ul class="list-group">
        <li class="list-group-item active">Dados do solicitante</li>
        <li class="list-group-item">Nome: {{$dadoschamadoeditar->nome_solicitante}}</li>
        <li class="list-group-item">email: {{$dadoschamadoeditar->email}}</li>


    </ul>
</div>
  </div>
</div>




@endsection