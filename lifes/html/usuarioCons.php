<html>
<head>
  <meta charset="UTF-8">
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Usuario | Consultas</title> <!-- nomezinho que aparece lá em cima -->

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
      <div class="col-lg-6 py-3">
        <div class="widget-wrap">
          <a class="btn btn-primary rounded-pill" href="marcar-consulta.php?CPF=<?php 	
          $CPF = $_GET['CPF'];
          $NomeP = $_GET['NomeP']; 
          echo $CPF?>&NomeP=<?php echo $NomeP?>">Agendar Consulta</a>
          <p>Agende de maneira prática</p>
        </div>
      </div>

      <div class="widget-wrap">
        <form action="#" class="search-form">
          <h3 class="widget-title">Consultas</h3>
          <?php
		  
		$CPF = $_GET['CPF'];
		$NomeP = $_GET['NomeP'];
		$TelefoneP = $_GET['TelefoneP'];
		$EnderecoP = $_GET['EnderecoP'];
		$Data_de_Nascimento = $_GET['Data_de_Nascimento'];
		$sexo = $_GET['sexo'];
		$Email = $_GET['Email'];
		  
		  
		  // Conexão com o Banco de Dados
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')or die('Não foi possivel conectar ao banco de dados');

       		

		  echo "<table class='table table-hover'>";
		echo "<tr>";

		echo "<th>Médico</th>";
		echo "<th>CRM</th>";
		echo "<th>CPF</th>";
		echo "<th>Data</th>";
		echo "<th> Hora </th>";
		echo "<th>Paciente</th>";
		
		  
		  
		  
			$sql3 = "SELECT * FROM `tbconsulta` where DATE_FORMAT(Data, '%Y-%m-%d') = '$hoje' && CPF = $CPF"; 
			$sql2 = "SELECT * FROM `tbpaciente` where CPF = $CPF";
			
			$resultado3 = mysqli_query($StringConexao,$sql3) or die ("Erro ao tentar consultar resgistro");
			$resultado2 = mysqli_query($StringConexao,$sql2) or die ("Erro ao tentar consultar resgistro");
			
			
			while (($resgitro3 = mysqli_fetch_array($resultado3)) && ($registro2 = mysqli_fetch_array($resultado2))){
					
					echo "<tr>";
			        $CRM = $resgitro3['CRM'];
					$CPF = $resgitro3['CPF'];
					$Data = $resgitro3['Data'];
				    $Hora =$resgitro3['Hora'];
					$NomeP = $registro2['NomeP'];
					 
					$sql1 = "SELECT NomeM FROM `tbmedico` where CRM = $CRM";

					$resultado1 = mysqli_query($StringConexao,$sql1) or die ("Erro ao tentar consultar resgistro");					

					while (($registro1 = mysqli_fetch_array($resultado1))){
						
						echo "<tr>";
						$NomeM = $registro1['NomeM'];
						
						echo "<td>".$NomeM."</td>";
					}

					echo "<td>".$CRM."</td>";
					echo "<td>".$CPF."</td>";
					echo "<td>".$Data."</td>";
				    echo "<td>".$Hora."</td>";
					echo "<td>".$NomeP."</td>";
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
    <div class="logo"><?php echo $_GET['EnderecoP']; ?></div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo <?php 
		
		
         		echo $_GET['NomeP'];
		
		     ?></div>
    </div>
    <nav class="menu">
      <a class="menu__item menu__item--active" href="#">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item" href="usuarioArq.php?CPF=<?php echo $CPF?>&NomeP=<?php echo $NomeP?>&TelefoneP=<?php echo $TelefoneP?>&EnderecoP=<?php echo $EnderecoP?>&Data_de_Nascimento=<?php echo $Data_de_Nascimento?>&sexo=<?php echo $sexo?>&Email=<?php echo $Email?>">
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