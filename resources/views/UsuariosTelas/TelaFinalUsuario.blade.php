@extends('Bases.BaseMenuUsuario')
@section('conteudo')


<div class="alert alert-success" role="alert">
    <p>Seu Chamado Foi Aberto Com Sucesso</p>
</div>

<div class="container">
    <div class="row">


        <div class="col-4 col-sm-2 ">
            <img src="{{asset('Imagem/toto.png')}}" class="rounded-circle" width="150px" alt="10">
        </div>

        <div class="col-6   col-sm-6">
            <div class="alert alert-success" role="alert">
                <p>Você pode acompanhar os status do seu chamado em <a href="#"> Meus Chamados</a></p>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-6">
            Resumo do seu chamado

            <ul>
                <dt>Dados Chamado</dt>
                <li>ID do seu chamado: <a href="#"> {{' '.$dadosdochamado->id}} </a></li>
                <li>Computador:
                    @for ($x=0;$x<sizeOf($numerodoComputador);$x++) 
                    {{$numerodoComputador[$x].','}} 
                    @endfor </li>
                <li> Laboratorio:{{' '.$nomeLaboratorio}} </li>
                <li>data de abertura :{{' '.$dadosdochamado->data_abertura}}</li>
                <li>Descrição do Problema:<br>
                    {{$dadosdochamado->descricao_problema}}</li>
                <br>

                <dt>Dados do Usuario</dt>
                <li>Nome: {{' '.$dadosdochamado->nome_solicitante}}</li>
                <li>CPF:{{' '.$dadosdochamado->CPF}}</li>

            </ul>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <a href="{{url('/Logout')}}" type="button" class="btn btn-warning"> Sair do sistema</a>
        </div>
    </div>
</div>

@endsection