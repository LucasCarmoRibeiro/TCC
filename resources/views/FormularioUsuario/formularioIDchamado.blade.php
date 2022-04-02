@extends('Bases.BaseMenuUsuario')
@section('conteudo')
    

<div class="container">

    <div class="row">
     
      <div class="col-12">
    
    
                  <div class="col-md-6 mb-4">
            
                      <div class="alert alert-dark" role="alert">
                        Digite aqui o ID do seu chamado
                       </div>
                  </div>
      <form method="POST" action="BuscarChamadoID">
            
               @csrf
    
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Digite aqui </label>
                    <input type="number" name="IDchamado" class="form-control" id="exampleFormControlInput1" placeholder="9849498">
                  </div>
    
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Buscar Chamado</button>
                  </div>
       </form>
            </div>
    
        </div>
    
    <div class="row">
        <div class="col-12">

        @if(!empty($dadosChamado))
         <ul>
         
          <li>Status:{{$dadosChamado->status}}</li>
          <li>data de Abertura:{{$dadosChamado->data_abertura}}</li>
          <li>data de Fechamento:{{$dadosChamado->data_fechamento}}</li>
          <li>Numero do PC :
          @foreach ($dadosChamado->equipamento as $key) 
               {{$key->Numero.','}}
          @endforeach
        </li>
          <li>{{$laboratoriodados->name}}</li>
         

            </ul>
       
        @endif
        </div>
    </div>
    
    
    
    
    </div>


@endsection