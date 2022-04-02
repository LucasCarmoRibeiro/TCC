@extends('Bases.BaseMenuUsuario')
@section('conteudo')
<div class="alert alert-info" role="alert">
  Olá, Vi que você escolheu a opção outro, Preencha os dados a seguir ;)
 </div>

<div class="container">

<div class="row">
 
  <div class="col-12">


              <div class="col-md-6 mb-4">
        
                  <div class="alert alert-dark" role="alert">
                    Antes de tudo, de qual equipamento se trata? ex: projetor.. <br>
                    Qual o numero deste equipamento? (esse numero fica no canto superior do equipamento)<br>
                    Descreva o problema com maximo de detalhes que conseguir
                   </div>
              
  <form method="POST" action="{{ url('SalvarComputadoresNoChamado2.usuario',['idLaboratorio'=>$id ,'titulo'=>'OUTRO','status'=>'Pendente'] ) }} ">
        @csrf
             <div class="mb-3">
                <textarea rows="5" cols="33" name="descricao"  placeholder="Descreva o problema">   </textarea>

              </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Seu Email </label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
             
              <INPUT TYPE="hidden" NAME="idLaboratorio" VALUE="{{$id}}">
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
