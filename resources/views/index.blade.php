
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo asset('Css/estilo.css')?>" type="text/css">

    <title>Bem vindo!</title>
  </head>

  
  <body  style="background-color:#2F7843  " background=#000000>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center  h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-while text-dark" style="border-radius: 1rem;">
                <div class="card-body p-10 text-center">
      <form action="/Logar" method="POST">
        @csrf
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <img src="Imagem/toto.png" width="110">
                    <h2 class="fw-bold mb-2 text-uppercase">TOTO-SEMPRE DISPOSTO A TE OUVIR</h2>
                    <p class="text-dark-50 mb-5">Abertura De Chamado</p>
                
    
                    <div class="form-outline form-dark mb-4">
                        <label class="form-label" for="typeEmailX">CPF</label>
                      <input type="text" name="CPF" id="typeEmailX" class="form-control form-control-lg" />
                    </div>
      
                    <div class="form-outline form-dark mb-4">
                        <label class="form-label" for="typePasswordX">SENHA</label>
                  <input type="password" id="typePasswordX"  name="Senha" class="form-control form-control-lg" />
                    </div>
      
      
                    <button class="btn btn-outline-dark btn-lg px-5" type="submit">Entrar</button>
                    
                    <a href="{{url('/AcessarBuscarChamadoID')}}" type="button" class="btn btn-outline-primary btn-lg px-5"> Buscar Chamado</a>
                  

                  </div>
                  <a href="{{url('/AcessarRecuperarSenha')}}" type="button" class="btn btn-outline-danger btn-lg px-5"> Esqueci Minha Senha</a>
      
                </form>  
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>




