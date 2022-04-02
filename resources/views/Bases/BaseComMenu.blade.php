<!doctype html>
<html lang="pt-br">
  
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo asset('Css/estilo.css')?>" type="text/css">



    <title>Index</title>
</head>

<body>

<!--row = nova linha-->

<div class="container-fluid fundoCabecalho">
    <div class="row">
<div id="topo-desktop" class="d-none d-sm-block">
        <div class="offset-xl-1 col-xl-2 col-sm-2">
          <a href="{{ url('AcãoAdministrador') }}">  <img src="{{asset('Imagem/toto.png')}}" width="110"> </a>



        </div>

        <div class="col-xl-9 col-sm-9 centralTitulo FormatacaoTiTulo">
            <h2 class="SombraTitulo">TOTÓ-Sempre Disposto a te Ouvir</h2>
            <p>Sistema de Abertura de Chamados</p>
        </div>
    </div>
 <!-- fim do topo desktop -->

<div id="topo-mobile" class="d-block d-sm-none fundoCabecalho" >
        <div class="offset-xl-1 col-xl-2 col-sm-2 ">
         <!--  <img src="img/toto-sozinho.png" alt="" width="150" class="img-fluid ">  <-->
        </div>

        <div class="col-xl-9 col-sm-9 centralTituloCelu FormatacaoTiTulo">
            <h1 class="SombraTitulo text-center">TOTÓ-Sempre Disposto a te Ouvir</h1>
            <p class="text-center">Sistema de Abertura de Chamados</p>
        </div>
    </div>
</div>
</div> <!-- fim do topo mobile -->



    <!-- inicio menu -->


    <div class="container-fluid">
        <div class="row">


            <nav class="navbar navbar-default menuFormatacao menuTextoFormacao" style="background-color: ">
               
               <div class="col-10">

              <a href="{{url('/AcãoAdministrador')}} " style="padding-right: 20px">Home</a>
              
              <a href="{{url('/Logout')}}">Sair</a>

                @if(!empty(@$_SESSION['nome_usuario']))
            {{@$_SESSION['nome_usuario']  }}
            @endif
        </div>
              </nav>
            
         <!--     <nav class=  " navbar navbar-expand-lg navbar-light menuFormatacao" >
                <div class="col-xl-8 col-xs-6 col-6 menuTextoFormacao  ">
                    @if(!empty(@$_SESSION['nome_usuario']))
                    olá {{@$_SESSION['nome_usuario']  }}
                    @endif
                    TESTE
                </div>

              <div class=" col-xl-4 col-xs-7 col-7  menuTextoFormacao ">


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link "href="#" aria-current="page" href="#">Home</a> 
                            
                            <a class="nav-link" href="#">Deslogar</a>
                        </div>
                    </div> -->
                </div>
            </nav>

        </div>

    </div>


<!--fim do menu-->

<!--Inicio-Conteudo-->

@yield('conteudo')

<!--Fim Conteudo-->


<!--inicio do rodapé-->


<div class="container-fluid ">
    <div class="row">



        <div class="rodape1 ">

        </div>

        <div class="rodape2 ">

        </div>


    </div>
</div>

<!--final rodapé-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
