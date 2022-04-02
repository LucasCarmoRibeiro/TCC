@extends('Bases.BaseMenuUsuario')
@section('conteudo')
<div class="alert alert-info" role="alert">
  Olá, Vi que você escolheu a opção pra recuperar a senha, Preencha os dados a seguir ;)
 </div>

<div class="container">

<div class="row">
 
  <div class="col-12">


              <div class="col-md-6 mb-4">
        
                
  <form method="POST" action="{{ url('SalvarComputadoresNoChamado2.usuario',['idLaboratorio'=>'lab' ,'titulo'=>'RECUPERAÇÂO DE SENHA','status'=>'Pendente'] ) }} ">
        @csrf
           
        
        <div class="mb-3">
            <label  class="form-label">Seu nome COMPLETO </label>
            <input type="text" name="nome" class="form-control" >
          </div>


        <div class="mb-3">
            <label  class="form-label">Seu CPF </label>
            <input type="number" name="CPF" class="form-control" >
          </div>

        
             
              <INPUT TYPE="hidden" NAME="idLaboratorio" VALUE="">
              <INPUT TYPE="hidden" NAME="Tipo" VALUE="outros">
               <INPUT TYPE="hidden" NAME="Numero" VALUE="99999">
              <INPUT TYPE="hidden" NAME="numerodoComputador[]" VALUE="777777">
                <INPUT TYPE="hidden" NAME="id_Computadores[]" VALUE="1000">


              <div class="col-12">
                <button type="submit" class="btn btn-primary">Abrir Chamado</button>
              </div>
   </form>
        </div>

    </div>
 </div>
</div>

@endsection
