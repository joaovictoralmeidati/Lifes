<html>
<head>
  <meta charset="UTF-8">
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Usuario | Samu</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->


</head>  
  <div class="wrapper">
  <main>
    <div class="toolbar">
      
      <div class="current-month">Agosto 2021</div>
      <div class="search-input">
        <input type="text" value="Buscar">
        <i class="fa fa-search"></i>
      </div>
    </div>
    <div class="calendar">
      <div class="col-lg-6 py-3">
        <div class="widget-wrap">
          <a href="samu.html" class="btn btn-primary rounded-pill">Chamar Samu</a>
          <p>chame de maneira prática</p>
        </div>
      </div>

      <div class="widget-wrap">
        <form action="#" class="search-form">
          <h3 class="widget-title">Consultas</h3>
          <div class="form-group">
            <span class="icon mai-search"></span>
            <div id = 'pesquisar'>
      
              <input type ='text' name = "buscar" id = "buscar" class = "form-control" placeholder="Pesquise o agendamento de consultas"> <br>
              
              <button type="button" class="btn btn-outline-primary" id = "btnPesquisar" onclick = "buscaDados();">Pesquisar</button>
              
              <div id = dados>
              
              </div>
              </div>
          
          </div>
        </form>
      </div>

      
    </div>
  </main>
  <sidebar>
    <div class="logo">Sao Paulo</div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo Pedro</div>
    </div>
    <nav class="menu">
      <a class="menu__item" href="usuarioCons.html">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item menu__item--active" href="usuarioSamu.html">
        <i class="menu__icon fa fa-envelope"></i>
        <span class="menu__text">Ambulancia</span>
      </a>
      <a class="menu__item" href="usuarioArq.html">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Arquivos</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-trophy"></i>
        <span class="menu__text">Configuracoes</span>
      </a>
      <a class="menu__item" href="index.html">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Menu</span>
      </a>
    </nav>
    <div class="copyright">life's &copy; inovation</div>
  </sidebar>
</div>