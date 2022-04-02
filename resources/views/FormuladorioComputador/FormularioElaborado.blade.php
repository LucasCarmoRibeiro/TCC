@extends('Bases.BaseMenuUsuario')
@section('conteudo')





<div class="container-fluid Basesala">
    <div class="row">
        <div class="col-3">
            <img src="{{asset('icones/porta-removebg-preview.png')}}" height="55" width="55">
        </div>
        <div class="offset-xs-4 col-4">
            <img src="{{asset('icones/lousa.png')}}" height="55" width="55">
        </div>
    </div>

    <form method="POST" action="{{ url('SalvarComputadoresNoChamado1.usuario',['id'=> $id]) }}" >
        @csrf
     <div class="row">

            <div class="col-12 centrodiv">

                @foreach ($Computadores as $item )
                
                <div class="col-1 card  divPC  " style="width: 2cm; background-color:#4A1B82;">
                    <br>
                        <img src="{{asset('icones/computador.png')}}" height="35" width="35" class="icones rounded">

                        <div class="card-body">
                            <a href="#"> </a>
                            <input name="id_Computadores[]" type="checkbox" value="{{$item->id}}"><br>
                            <label class="text-light"> {{$item->Numero}} </label><br>
                            <INPUT TYPE="hidden" NAME="NumeroDoComputador[]" VALUE="{{$item->Numero}}">

                        </div>
                </div>

                <!--fim cards-->
                @endforeach

               
            </div>

        </div>
      <div class="row">
          <div class="col-12">
            <a href="{{ url('/DadosOutros', ['id'=> $id ] ) }}"  type="button" class="btn btn-warning">Não é Um Computador</a>
          </div>
      </div>
     
      <div class="row">
        <div class="col-12">
      
      <div class="col-sm-2 offset-sm-10 col-md-2 offset-md-10 col-11">
        <br>
        
        <button type="submit" class="btn btn-primary">Proxima Passo</button>
      </div>
       
       </div>
      </div>

    </div>           
    </form>



<!--Fim Conteudo-->

@endsection