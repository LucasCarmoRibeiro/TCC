@extends('Bases.BaseMenuUsuario')
@section('conteudo')
    

<div class="alert alert-success" role="alert">
    Seja Bem Vindo ao Sistema
</div>
<div class="container">
<div class="row">
      <div class="col-3">
  <a href="{{url('EscolhaLaboratorios')}}" type="button" class="btn btn-success">Abrir Novo Chamado</a>
      </div>
      
      
    <div class="col-3">
        <a href="{{url('AcessarBuscarChamadoID')}}" type="button" class="btn btn-success">Buscar Um Chamado</a>
    </div>

      <div class="col-6">
       
<h6>links Uteis</h6>
<ul>
  <li><a href="#">Sistema Academico</a></li>
  <li><a href="#">EAD</a></li>
  <li><a href="#">teste</a></li>
</ul>
   
  </div>

</div>
<div class="row">
  <div class=" col-6">
   
    <br>
            <iframe width="460" height="215" src="https://www.youtube.com/embed/zKAAFsovtM4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>     
</div>
</div>

@endsection