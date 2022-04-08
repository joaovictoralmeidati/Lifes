<html>
<head>
  <meta charset="UTF-8">
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>ADM | Dados</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->


</head> 
<div class="wrapper">
  <main>
    <div class="toolbar">
      
      <div class="current-month">Informações</div>
      
    </div>
    <div class="calendar">
      <div class="col-lg-6 py-2">
        <div class="widget-wrap">

          <h5 class="widget-title">Nome do Hospital:</h5>
              <?php 
		
         		echo $_GET['NomeH'];
		
		     ?>
			 
			 <br></br>
      
          <h5 class="widget-title">Endereco:</h5>
             <?php 
		
         		echo $_GET['EnderecoH'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Telefone:</h5>
             <?php 
		
         		echo $_GET['TelefoneH'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">CNPJ</h5>
             <?php 
		
         		echo $_GET['CNPJ'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Responsavel:</h5>
             <?php 
		
         		echo $_GET['Responsavel'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Senha:</h5>
             <?php 
		
         		echo $_GET['Senha'];
		
		     ?>
			 
			 <br></br>

        </div>
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


	echo $NomeH ?></div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo <?php 
		
		echo $Responsavel; ?></div>
    </div>
    <nav class="menu">
    <a class="menu__item" href="admCons.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item" href="admSamu.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-envelope"></i>
        <span class="menu__text">Ambulância</span>
      </a>
      <a class="menu__item" href="#">
        <i class="menu__icon fa fa-list"></i>
        <span class="menu__text">Histórico</span>
      </a>
      <a class="menu__item" href="admTela.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Calendario</span>
      </a>
      <a class="menu__item menu__item--active" href="admArq.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Dados</span>
      </a>
      <a class="menu__item"  href="index.html">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Menu</span>
      </a>
      
    </nav>
    <div class="copyright">life's &copy; inovation</div>
  </sidebar>
</div>