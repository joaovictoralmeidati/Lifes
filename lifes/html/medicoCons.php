<html>
<head>
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="medicoajax.js"> </script>

  <title>Medico | Consultas</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->


</head>  
  <div class="wrapper">
  <main>
    <div class="toolbar">
      
      <div class="current-month"><?php $hoje = date('Y-m-d');
			
		echo "$hoje </h3>"; ?></div>
      <div class="search-input">
        <input type="text" value="Buscar">
        <i class="fa fa-search"></i>
      </div>
    </div>
    <div class="calendar">
      
	  
	  

      <div class="widget-wrap">
        <form action="#" class="search-form">
          <h3 class="widget-title">Consultas</h3>
          <?php
		  
		$nome = $_GET['nome'];
		$data = $_GET['data'];
		$sexo = $_GET['sexo'];
		$CRM = $_GET['CRM'];
		$TelefoneM = $_GET['TelefoneM'];
		$CNPJ = $_GET['CNPJ'];
		  
		  
		  // Conexão com o Banco de Dados
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')or die('Não foi possivel conectar ao banco de dados');

       		

		  echo "<table class='table table-hover'>";
		echo "<tr>";

		echo "<th>Paciente</th>";
		echo "<th>CRM</th>";
		echo "<th>CPF</th>";
		echo "<th>Data</th>";
		echo "<th> Hora </th>";
		echo "<th>Médico</th>";
		
		  
		  
			$sql3 = "SELECT * FROM `tbconsulta` where DATE_FORMAT(Data, '%Y-%m-%d') = '$hoje' && CRM = $CRM"; 
			$sql2 = "SELECT * FROM `tbmedico` where CRM = $CRM";
			
			$resultado3 = mysqli_query($StringConexao,$sql3) or die ("Erro ao tentar consultar resgistro");
			$resultado2 = mysqli_query($StringConexao,$sql2) or die ("Erro ao tentar consultar resgistro");
			
			
			while (($resgitro3 = mysqli_fetch_array($resultado3)) && ($registro2 = mysqli_fetch_array($resultado2))){
					
					echo "<tr>";
			        $CRM = $resgitro3['CRM'];
					$CPF = $resgitro3['CPF'];
					$Data = $resgitro3['Data'];
				    $Hora =$resgitro3['Hora'];
					$NomeM = $registro2['NomeM'];
					 
					$sql1 = "SELECT NomeP FROM `tbpaciente` where CPF = $CPF";

					$resultado1 = mysqli_query($StringConexao,$sql1) or die ("Erro ao tentar consultar resgistro");					

					while (($registro1 = mysqli_fetch_array($resultado1))){
						
						echo "<tr>";
						$NomeP = $registro1['NomeP'];
						
						echo "<td>".$NomeP."</td>";
					}

					echo "<td>".$CRM."</td>";
					echo "<td>".$CPF."</td>";
					echo "<td>".$Data."</td>";
				    echo "<td>".$Hora."</td>";
					echo "<td>".$NomeM."</td>";
				    echo "</tr>";
				    echo "</tr>";
					
					
					
						
}					
				
echo "</table>";
					
					
			mysqli_close($StringConexao);



	?>
        </form>
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
		
		$sql0 = "SELECT NomeH FROM `tbhospital` where CNPJ = $CNPJ";
		
		$resultado0 = mysqli_query($StringConexao,$sql0) or die ("Erro ao tentar consultar resgistro");
		
		while (($registro0 = mysqli_fetch_array($resultado0))){
						
						echo "<tr>";
						$NomeH = $registro0['NomeH'];
						
						echo "<td>".$NomeH."</td>";
					}
	
	?></div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo 
	  
	  <?php 
		
		
		echo $nome;
		
		?>
	  
	  </div>
    </div>
    <nav class="menu">
      <a class="menu__item menu__item--active" href="medicoCons.php?nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item "  href="medicoCalen.php?nome=<?php echo $CRM?>&nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Calendario</span>
      </a>
      <a class="menu__item" href="medicoArq.php?nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
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