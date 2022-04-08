<html>
<head>
  <meta charset="UTF-8">
  <script src="ajax.js"> </script>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>ADM | Consultas</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->


</head>  
  <div class="wrapper">
  <main>
    <div class="toolbar">
      
      <div class="current-month">2021</div>
      <div class="search-input">
        <input type="text" value="Buscar">
        <i class="fa fa-search"></i>
      </div>
    </div>
    <div class="calendar">
      

      <div class="widget-wrap">
        <form action="#" class="search-form">
          <h3 class="widget-title">Consultas</h3>
		  
		  
          <?php $hoje = date('Y-m-d');
		  
		  $CNPJ = $_GET['CNPJ'];
	    $NomeH = $_GET['NomeH'];
		$EnderecoH = $_GET['EnderecoH'];
		$TelefoneH = $_GET['TelefoneH'];
		$Responsavel = $_GET['Responsavel'];
		$Senha = $_GET['Senha'];
		  
		  $StringConexao = mysqli_connect('localhost', 'root','','tcc')or die('Não foi possivel conectar ao banco de dados');

		  echo "<table class='table table-hover'>";
		echo "<tr>";

		echo "<th>Paciente</th>";
		echo "<th>Médico</th>";
		echo "<th>CRM</th>";
		echo "<th>CPF</th>";
		echo "<th>Data</th>";
		echo "<th> Hora </th>";
		echo "<th> CNPJ </th>";
		
		
		  
		  
			$sql3 = "SELECT * FROM `tbconsulta` where DATE_FORMAT(Data, '%Y-%m-%d') = '$hoje' && CNPJ = $CNPJ"; 
			
			
			$resultado3 = mysqli_query($StringConexao,$sql3) or die ("Erro ao tentar consultar resgistro");
			
			
			
			while (($registro3 = mysqli_fetch_array($resultado3))){
					
					echo "<tr>";
			        $CRM = $registro3['CRM'];
					$CPF = $registro3['CPF'];
					$Data = $registro3['Data'];
				    $Hora =$registro3['Hora'];
					$CNPJ = $registro3['CNPJ'];
					
					 
					$sql1 = "SELECT NomeP FROM `tbpaciente` where CPF = $CPF";
					$sql2 = "SELECT * FROM `tbmedico` where CRM = $CRM";

					$resultado1 = mysqli_query($StringConexao,$sql1) or die ("Erro ao tentar consultar resgistro");
					$resultado2 = mysqli_query($StringConexao,$sql2) or die ("Erro ao tentar consultar resgistro");					

					while (($registro1 = mysqli_fetch_array($resultado1)) && ($registro2 = mysqli_fetch_array($resultado2))){
						
						echo "<tr>";
						$NomeP = $registro1['NomeP'];
						$NomeM = $registro2['NomeM'];
						
						echo "<td>".$NomeP."</td>";
						echo "<td>".$NomeM."</td>";
					}

					echo "<td>".$CRM."</td>";
					echo "<td>".$CPF."</td>";
					echo "<td>".$Data."</td>";
				    echo "<td>".$Hora."</td>";
					echo "<td>".$CNPJ."</td>";
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
	
	    
		
		echo $NomeH;
	
	
	?></div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name">Bem vindo <?php 
	  
	  echo $Responsavel
	  
	  ?></div>
    </div>
    <nav class="menu">
    <a class="menu__item menu__item--active" href="admCons.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item" href="admSamu.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-envelope"></i>
        <span class="menu__text">Ambulância</span>
      </a>
      <a class="menu__item" href="admTela.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Calendario</span>
      </a>
      <a class="menu__item" href="admArq.php?CNPJ=<?php echo $CNPJ?>&NomeH=<?php echo $NomeH?>&EnderecoH=<?php echo $EnderecoH?>&TelefoneH=<?php echo $TelefoneH?>&TelefoneH=<?php echo $TelefoneH?>&Responsavel=<?php echo $Responsavel?>&Senha=<?php echo $Senha?>">
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