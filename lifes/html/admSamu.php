<html>
<head>
  <meta charset="UTF-8">
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>ADM | Samu</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->


</head>  
  <div class="wrapper">
  <main>
    <div class="toolbar">
      
      <div class="current-month">Agosto 2021</div>
      
    </div>
    <div class="calendar">
      <div class="col-lg-6 py-3">
          <p>X de Ambulâncias solicitadas hoje.</p>
      </div>

      <div class="widget-wrap">
        <form action="#" class="search-form">
          <h3 class="widget-title">Samu</h3>
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
    <div class="logo"><?php 
	
	    $CNPJ = $_GET['CNPJ'];
	    $NomeH = $_GET['NomeH'];
		$EnderecoH = $_GET['EnderecoH'];
		$TelefoneH = $_GET['TelefoneH'];
		$Responsavel = $_GET['Responsavel'];
		$Senha = $_GET['Senha'];
		
		echo $NomeH;
	
	
	?></div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo <?php 
	  
	  echo $Responsavel;
	  
	  
	  ?></div>
    </div>
    <nav class="menu">
      <a class="menu__item" href="admCons.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item menu__item--active" href="admSamu.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-envelope"></i>
        <span class="menu__text">Ambulancia</span>
      </a>
      <a class="menu__item" href="admArq.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Dados</span>
      </a>
      <a class="menu__item" href="admTela.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Calendario</span>
      </a>
      <a class="menu__item" href="index.html">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Menu</span>
      </a>
    </nav>
    <div class="copyright">life's &copy; inovation</div>
  </sidebar>
</div>