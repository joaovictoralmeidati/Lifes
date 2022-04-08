<html>
<head>
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Medico | Arquivos</title> <!-- nomezinho que aparece lá em cima -->

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

          <h5 class="widget-title">Nome:</h5>
             <?php 
		
         		echo $_GET['nome'];
		
		     ?>
			
			<br></br>
			
      
          <h5 class="widget-title">Data de Nascimento:</h5>
            <?php 
		
         		echo $_GET['data'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Sexo</h5>
            <?php 
		
         		echo $_GET['sexo'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">CRM</h5>
            <?php 
		
         		echo $_GET['CRM'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Telefone</h5>
            <?php 
		
         		echo $_GET['TelefoneM'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">CNPJ</h5>
            <?php 
		
         		echo $_GET['CNPJ'];
		
		     ?>
			 
			 <br></br>
        </div>
      </div>
      
    </div>
  </main>
  <sidebar>
    <div class="logo"><?php
	
		$nome = $_GET['nome'];
		$data = $_GET['data'];
		$sexo = $_GET['sexo'];
		$CRM = $_GET['CRM'];
		$TelefoneM = $_GET['TelefoneM'];
		$CNPJ = $_GET['CNPJ'];
		
		$StringConexao = mysqli_connect('localhost', 'root','','tcc')or die('Não foi possivel conectar ao banco de dados');
		
		$sql3 = "SELECT NomeH FROM `tbhospital` where CNPJ = $CNPJ";
		
		$resultado3 = mysqli_query($StringConexao,$sql3) or die ("Erro ao tentar consultar resgistro");
		
		while (($registro3 = mysqli_fetch_array($resultado3))){
						
						echo "<tr>";
						$NomeH = $registro3['NomeH'];
						
						echo "<td>".$NomeH."</td>";
					}
	
	?></div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo <?php 
		$nome = $_GET['nome'];
		$data = $_GET['data'];
		$sexo = $_GET['sexo'];
		$CRM = $_GET['CRM'];
		$TelefoneM = $_GET['TelefoneM'];
		$CNPJ = $_GET['CNPJ'];
		
         		echo $_GET['nome'];
		
		     ?></div>
    </div>
    <nav class="menu">
      <a class="menu__item" href="medicoCons.php?nome=<?php echo $CRM?>&nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      
      <a class="menu__item " href="medicoCalen.php?nome=<?php echo $CRM?>&nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Calendario</span>
      </a>
      <a class="menu__item menu__item--active" href="medicoArq.php?nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Dados</span>
      </a>
      <a class="menu__item" href="index.html">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Menu</span>
      </a>
      
    </nav>
    <div class="copyright">life's &copy; inovation</div>
  </sidebar>
</div>