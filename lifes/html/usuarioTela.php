<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inicial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="ajax.js"> </script>


  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>life's Usuario</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style.css">
  
</head>
<body>
<!-- inicio -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="../assets/user.png" alt="" width="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Dados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consulta.html">Configurações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">Sair</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="bg-light">

  <div class=" bg-image hero-mini" style="background-image: url(../assets/img/fundo-samu.svg);">
    
  
    
  </div>


  <div class="page-section">
    <div class="container">
      <div class="row">
  
        <div class="container h-100">
          <div class="row justify-content-center align-items-center text-center h-100">
            
            
            <div class="col-lg-5 py-3">
              <div class="widget-wrap">
                <h3 class="widget-title">Agendar Consulta</h3>
                <p>Consultas médicas</p>
              </div>
            </div>
  
              <div class="col-lg-5 py-3">
                <div class="widget-wrap">
                  <h3 class="widget-title">Solicitar Ambulância</h3>
                  <p>Em todo o estado de São Paulo</p>
                </div>
              </div>
  
  
          </div>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-11 py-3">
          <div class="widget-wrap">
            <form action="#" class="search-form">
              <h3 class="widget-title">Ver consultas agendadas</h3>
              <div class="form-group">
                <span class="icon mai-search"></span>
                <div id = 'pesquisar'>
          
                  <input type ='text' name = "buscar" id = "buscar" class = "form-control" placeholder="Pesquise solicitações de ambulância"> <br>
                  
                  <button type="button" class="btn btn-outline-primary" id = "btnPesquisar" onclick = "buscaDados();">Pesquisar</button>
                  
                  <div id = dados>
                  
                  </div>
                  </div>
              
              </div>
            </form>
          </div>
          

            <div class="widget-wrap">
              <form action="#" class="search-form">
                <h3 class="widget-title">Historico</h3>
                <div class="form-group">
                  <span class="icon mai-search"></span>
                  <div id = 'pesquisar'>
          
                    <input type ='text' name = "buscar" id = "buscar" class = "form-control" placeholder="Pesquise agendamento de consulta"> <br>
                    
                    <button type="button" class="btn btn-outline-primary" id = "btnPesquisar" onclick = "buscaDados();">Pesquisar</button>
                    
                    <div id = dados>
                    
                    </div>
                    </div>
                
                </div>
              </form>
            </div>
           

          
          </div>

        
        
      </div>
    </div>
  </div>
</main>

  

  <script src="../assets/js/jquery.js"></script>

  <script src="../assets/js/bootstrap.js"></script>
</body>
</html>



