<html>
		
<head>
  <meta charset="UTF-8">

  <title>life's finaliza</title>


  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <link rel="shortcut icon" href="assets/icone.png" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<center>


     
<form method="POST" action="escolherhopsital.php">


<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="assets/icone.png" alt="" width="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      
      
    </div>
  </div>
</nav>

<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url();">

    <div class="page-section">
      <div class="container">
        <div class="row justify-content-center">
         
          <div class="col-md-10 col-lg-8 my-1 wow fadeInUp">
            <div class="card-page">
<?php
session_start();
		$num = $_POST ['num'];
		
        $CNPJ = $_SESSION['CNPJ'];
		$especialidade = $_SESSION['Especialidade'];
		echo $especialidade;
		
		switch ($num) {
			case 1:
				$Hora1  = $_POST ['Hora1'];
				$situacao = 'livre';
				$CRM = $_POST ['CRM'];
				$Data = $_POST ['Data'];
				
		
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','','','','','','','','','','','','','','','','','','','')";
		
				
				mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
				
				mysqli_close($StringConexao);
				echo " cadastrado com Sucesso! <br>";
  break;

    case 2:
		$Hora1 =  $_POST ['Hora1'];
		$Hora2 =  $_POST ['Hora2'];

	
		$situacao = 'livre';
		$CRM = $_POST ['CRM'];
		$Data = $_POST ['Data'];
		

	


		
		$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','','','','','','','','','','','','','','','','','','')";
		
		
		mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
		
		mysqli_close($StringConexao);
		echo " cadastrado com Sucesso! <br>";
        break;
    case 3:
		$Hora1 =  $_POST ['Hora1'];
		$Hora2 =  $_POST ['Hora2'];
		$Hora3 =  $_POST ['Hora3'];


		$situacao = 'livre';
		$CRM = $_POST ['CRM'];
		$Data = $_POST ['Data'];
		

		$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','','','','','','','','','','','','','','','','','')";
		
		
		mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
		
		mysqli_close($StringConexao);
		echo " cadastrado com Sucesso! <br>";
        break;
		case 4:
			$Hora1 =  $_POST ['Hora1'];
			$Hora2 =  $_POST ['Hora2'];
			$Hora3 =  $_POST ['Hora3'];
			$Hora4 =  $_POST ['Hora4'];
	
			$situacao = 'livre';
			$CRM = $_POST ['CRM'];
			$Data = $_POST ['Data'];
			
	
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','','','','','','','','','','','','','','','','')";
			
			
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
			
			mysqli_close($StringConexao);
			echo " cadastrado com Sucesso! <br>";
			break;
	case 5:
			$Hora1 =  $_POST ['Hora1'];
			$Hora2 =  $_POST ['Hora2'];
			$Hora3 =  $_POST ['Hora3'];
			$Hora4 =  $_POST ['Hora4'];
			$Hora5 =  $_POST ['Hora5'];
	
			$situacao = 'livre';
			$CRM = $_POST ['CRM'];
			$Data = $_POST ['Data'];
			
	
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','','','','','','','','','','','','','','','')";
			
			
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
			
			mysqli_close($StringConexao);
			echo " cadastrado com Sucesso! <br>";
			break;
	case 6:
			$Hora1 =  $_POST ['Hora1'];
			$Hora2 =  $_POST ['Hora2'];
			$Hora3 =  $_POST ['Hora3'];
			$Hora4 =  $_POST ['Hora4'];
			$Hora5 =  $_POST ['Hora5'];
			$Hora6 =  $_POST ['Hora6'];
	
			$situacao = 'livre';
			$CRM = $_POST ['CRM'];
			$Data = $_POST ['Data'];
			
	
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','','','','','','','','','','','','','','')";
			
			
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
			
			mysqli_close($StringConexao);
			echo " cadastrado com Sucesso! <br>";
			break;
	case 7:
			$Hora1 =  $_POST ['Hora1'];
			$Hora2 =  $_POST ['Hora2'];
			$Hora3 =  $_POST ['Hora3'];
			$Hora4 =  $_POST ['Hora4'];
			$Hora5 =  $_POST ['Hora5'];
			$Hora6 =  $_POST ['Hora6'];
			$Hora7 =  $_POST ['Hora7'];
	
			$situacao = 'livre';
			$CRM = $_POST ['CRM'];
			$Data = $_POST ['Data'];
			
	
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','','','','','','','','','','','','','')";
			
			
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
			
			mysqli_close($StringConexao);
			echo " cadastrado com Sucesso! <br>";
			break;		
	case 8:
				$Hora1 =  $_POST ['Hora1'];
				$Hora2 =  $_POST ['Hora2'];
				$Hora3 =  $_POST ['Hora3'];
				$Hora4 =  $_POST ['Hora4'];
				$Hora5 =  $_POST ['Hora5'];
				$Hora6 =  $_POST ['Hora6'];
				$Hora7 =  $_POST ['Hora7'];
				$Hora8 =  $_POST ['Hora8'];
		
				$situacao = 'livre';
				$CRM = $_POST ['CRM'];
				$Data = $_POST ['Data'];
				
		
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
				or die('Não foi possivel conectar ao banco de dados');
				
				$sqlInsert = "INSERT INTO tbagenda VALUES";
				$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','','','','','','','','','','','','')";
				
				
				mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
				
				mysqli_close($StringConexao);
				echo " cadastrado com Sucesso! <br>";
				break;			
	case 9:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','','','','','','','','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;			
	case 10:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
			
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','','','','','','','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;		

		case 11:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','','','','','','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;			
	case 12:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','','','','','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;	
					
					
	case 13:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','','','','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
	case 14:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
					$Hora14 =  $_POST ['Hora14'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','$Hora14','','','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
	case 15:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
					$Hora14 =  $_POST ['Hora14'];
					$Hora15 =  $_POST ['Hora15'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','$Hora14','$Hora15','','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
case 16:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
					$Hora14 =  $_POST ['Hora14'];
					$Hora15 =  $_POST ['Hora15'];
					$Hora16 =  $_POST ['Hora16'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','$Hora14','$Hora15','$Hora16','','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
	case 17:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
					$Hora14 =  $_POST ['Hora14'];
					$Hora15 =  $_POST ['Hora15'];
					$Hora16 =  $_POST ['Hora16'];
					$Hora17 =  $_POST ['Hora17'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','$Hora14','$Hora15','$Hora16','$Hora17','','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
	case 18:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
					$Hora14 =  $_POST ['Hora14'];
					$Hora15 =  $_POST ['Hora15'];
					$Hora16 =  $_POST ['Hora16'];
					$Hora17 =  $_POST ['Hora17'];
					$Hora18 =  $_POST ['Hora18'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','$Hora14','$Hora15','$Hora16','$Hora17','$Hora18','','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
	case 19:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
					$Hora14 =  $_POST ['Hora14'];
					$Hora15 =  $_POST ['Hora15'];
					$Hora16 =  $_POST ['Hora16'];
					$Hora17 =  $_POST ['Hora17'];
					$Hora18 =  $_POST ['Hora18'];
					$Hora19 =  $_POST ['Hora19'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','$Hora14','$Hora15','$Hora16','$Hora17','$Hora18','$Hora19','')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
	case 20:
					$Hora1 =  $_POST ['Hora1'];
					$Hora2 =  $_POST ['Hora2'];
					$Hora3 =  $_POST ['Hora3'];
					$Hora4 =  $_POST ['Hora4'];
					$Hora5 =  $_POST ['Hora5'];
					$Hora6 =  $_POST ['Hora6'];
					$Hora7 =  $_POST ['Hora7'];
					$Hora8 =  $_POST ['Hora8'];
					$Hora9 =  $_POST ['Hora9'];
					$Hora10 =  $_POST ['Hora10'];
					$Hora11 =  $_POST ['Hora11'];
					$Hora12 =  $_POST ['Hora12'];
					$Hora13 =  $_POST ['Hora13'];
					$Hora14 =  $_POST ['Hora14'];
					$Hora15 =  $_POST ['Hora15'];
					$Hora16 =  $_POST ['Hora16'];
					$Hora17 =  $_POST ['Hora17'];
					$Hora18 =  $_POST ['Hora18'];
					$Hora19 =  $_POST ['Hora19'];
					$Hora20 =  $_POST ['Hora20'];
			
					$situacao = 'livre';
					$CRM = $_POST ['CRM'];
					$Data = $_POST ['Data'];
					
			
				
					$StringConexao = mysqli_connect('localhost', 'root','','tcc')
		
		
					or die('Não foi possivel conectar ao banco de dados');
					
					$sqlInsert = "INSERT INTO tbagenda VALUES";
					$sqlInsert .= "('',$CNPJ,$CRM,'$especialidade','$Data','$Hora1','$situacao','$Hora2','$Hora3','$Hora4','$Hora5','$Hora6','$Hora7','$Hora8','$Hora9','$Hora10','$Hora11','$Hora12','$Hora13','$Hora14','$Hora15','$Hora16','$Hora17','$Hora18','$Hora19','$Hora20')";
					
					
					mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar cadastrar resgistro");
					
					mysqli_close($StringConexao);
					echo " cadastrado com Sucesso! <br>";
					break;
}



  