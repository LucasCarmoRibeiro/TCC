@extends('Bases.BaseMenuUsuario')
@section('conteudo')
<div class="container">



  <div class="row">
    <div class="col-12">
      <form  method="POST" action="{{ url('SalvarComputadoresNoChamado2.usuario',['idLaboratorio'=>$idLaboratorio,'titulo'=>'Novo Chamado','status'=>'Pendente'] ) }} ">
@csrf
        <div class=" mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nome </label> <br>
          <input type="text" name="nome" class="form-control" placeholder="Seu Nome" aria-label="Username">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Seu Email </label>
          <input type="email" name="email" class="form-control" placeholder="name@example.com">
        </div>


        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Escreva com máximo de detalhes possíveis o problema
          </label>
          <br>
          <textarea rows="5" cols="33" name="descricao" placeholder="Descreva o problema">   </textarea>

        </div>

        @for($y=0;$y<sizeOf($id_Computadores);$y++)
        <INPUT TYPE="hidden" NAME="id_Computadores[]" VALUE="{{$id_Computadores[$y]}}">
        <INPUT TYPE="hidden" NAME="numerodoComputador[]" VALUE="{{$numerodoComputador[$y]}}">

        @endfor
        

@php
  print_r($id_Computadores);
@endphp
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Abrir Chamado</button>
        </div>

      </form>
    </div>
  </div>
</div>
</div>









@endsection