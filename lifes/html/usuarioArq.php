<html>
 
<head>
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Usuario | Arquivos</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->
  <meta charset="UTF-8">

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
		
         		echo $_GET['NomeP'];
		
		     ?>
			 
			 <br></br>
      
          <h5 class="widget-title">Nascimento:</h5>
             <?php 
		
         		echo $_GET['Data_de_Nascimento'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Sexo</h5>
             <?php 
		
         		echo $_GET['sexo'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">CPF</h5>
             <?php 
		
         		echo $_GET['CPF'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Telefone</h5>
             <?php 
		
         		echo $_GET['TelefoneP'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Endereco</h5>
             <?php 
		
         		echo $_GET['EnderecoP'];
		
		     ?>
			 
			 <br></br>

          <h5 class="widget-title">Email</h5>
             <?php 
		
         		echo $_GET['Email'];
		
		     ?>
			 
			 <br></br>
        </div>
      </div>
      
    </div>
  </main>
  <sidebar>
    <div class="logo">
	
	<?php 
		
         		echo $_GET['EnderecoP'];
		
		     ?>
	
	</div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo <?php 
		$CPF = $_GET['CPF'];
		$NomeP = $_GET['NomeP'];
		$TelefoneP = $_GET['TelefoneP'];
		$EnderecoP = $_GET['EnderecoP'];
		$Data_de_Nascimento = $_GET['Data_de_Nascimento'];
		$sexo = $_GET['sexo'];
		$Email = $_GET['Email'];
		
         		echo $_GET['NomeP'];
		
		     ?></div>
    </div>
    <nav class="menu">
      <a class="menu__item" href="usuarioCons.php?CPF=<?php echo $CPF?>&NomeP=<?php echo $NomeP?>&TelefoneP=<?php echo $TelefoneP?>&EnderecoP=<?php echo $EnderecoP?>&Data_de_Nascimento=<?php echo $Data_de_Nascimento?>&sexo=<?php echo $sexo?>&Email=<?php echo $Email?>">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item menu__item--active" href="usuarioArq.php?CPF=<?php echo $CPF?>&NomeP=<?php echo $NomeP?>&TelefoneP=<?php echo $TelefoneP?>&EnderecoP=<?php echo $EnderecoP?>&Data_de_Nascimento=<?php echo $Data_de_Nascimento?>&sexo=<?php echo $sexo?>&Email=<?php echo $Email?>">
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