<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">



  <title>life's Agenda</title>

<!--Alterações feitas por mim JV-->

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="ajax.js"> </script>

<!--alterações feitas por mim JV-->

  <link rel="shortcut icon" href="../assets/icone.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="../assets/icone.png" alt="" width="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="consultaEscolher.html">Consulta</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="samu.html">Ambulância</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="login.html">Entrar</a>
        </li>
      </ul>
      
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
              <h3 class="fw-normal">Criar Agenda</h3>
              <form method="POST" class="mt-3">
  
                <div class="form-group">
                  <label for="crm" class="fw-medium fg-grey">CRM</label>
                    <input type="number" class="form-control" placeholder="CRM do Médico" aria-label="CRM do Médico">
                </div>
  
                <div class="row">
                  <div class="col">
                    <label for="hora" class="fw-medium fg-grey">Hora</label>
                    <input type="time" class="form-control" >
                  </div>
  
                  <div class="col">
                    <label for="data" class="fw-medium fg-grey">Data</label>
                    <input type="date" class="form-control" >
                  </div>
                </div><br>
                 
  
                <div class="form-group">
                  <label for="nconsulta" class="fw-medium fg-grey">Número de Consultas</label>
                    <input type="number" class="form-control" placeholder="Número de Consultas" aria-label="Número de Consultas">
                </div>
  
      
      
                <div class="form-group mt-4">
                
                  

<?php
session_start();

$CRM= $_POST['CRM'];
$Data= $_POST['Data'];
$num= $_POST['num'];





$StringConexao = mysqli_connect('localhost', 'root','','tcc')
or die('Não foi possivel conectar ao banco de dados');
$sql = "SELECT * FROM `tbmedicos` where tbmedicos.CRM = $CRM";

$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");

	
if($resultado){
			$row_usuario = mysqli_fetch_assoc($resultado);
		
				$_SESSION['CNPJ'] = $row_usuario['CNPJ'];
				$_SESSION['Especialidade'] = $row_usuario['Especialidade'];
		

			
}




	
switch ($num) {
    case 1:
			echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			echo "  <label>CRM:  </label> ";
			echo "<input name='CRM' type='num' value =$CRM   ><br>";

			echo "<label>Data:  </label> ";
			echo "<input name='Data' type='num'value =$Data   ><br>" ;
			echo "<label>Numero de Consultas:  </label> ";
			echo "<input name='num' type='num'value =$num   ><br>" ;

			echo "Horario : 1 <input type='time' name='Hora1'/><br/>";

        break;
    case 2:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
			echo "  <label>CRM:  </label> ";
			echo "<input name='CRM' type='num' value =$CRM   ><br>";

			echo "<label>Data:  </label> ";
			echo "<input name='Data' type='num'value =$Data   ><br>" ;
			echo "<label>Numero de Consultas:  </label> ";
			echo "<input name='num' type='num'value =$num   ><br>" ;

			echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
			echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
        break;
    case 3:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
        break;
	case 4:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
			break;
	case 5:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
				break;		
	case 6:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
		echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
				break;		
	case 7:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
		echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
		echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
				break;		

	case 8:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
		echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
		echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
		echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
				break;		

	case 9:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
		echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
		echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
		echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
		echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
				break;	
				
				

	case 10:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
		echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
		echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
		echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
		echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
		echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
				break;	
case 11:
	echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
		echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
		echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
		echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
		echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
		echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
		echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
				break;	


	case 12:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
			
		echo "  <label>CRM:  </label> ";
		echo "<input name='CRM' type='num' value =$CRM   ><br>";

		echo "<label>Data:  </label> ";
		echo "<input name='Data' type='num'value =$Data   ><br>" ;
		echo "<label>Numero de Consultas:  </label> ";
		echo "<input name='num' type='num'value =$num   ><br>" ;

		echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
		echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
		echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
		echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
		echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
		echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
		echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
		echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
		echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
		echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
		echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
		echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
				break;	

	case 13:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
						
					echo "  <label>CRM:  </label> ";
					echo "<input name='CRM' type='num' value =$CRM   ><br>";
			
					echo "<label>Data:  </label> ";
					echo "<input name='Data' type='num'value =$Data   ><br>" ;
					echo "<label>Numero de Consultas:  </label> ";
					echo "<input name='num' type='num'value =$num   ><br>" ;
			
					echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
					echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
					echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
					echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
					echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
					echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
					echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
					echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
					echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
					echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
					echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
					echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
					echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
							break;	
							
	case 14:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
						
					echo "  <label>CRM:  </label> ";
					echo "<input name='CRM' type='num' value =$CRM   ><br>";
			
					echo "<label>Data:  </label> ";
					echo "<input name='Data' type='num'value =$Data   ><br>" ;
					echo "<label>Numero de Consultas:  </label> ";
					echo "<input name='num' type='num'value =$num   ><br>" ;
			
					echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
					echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
					echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
					echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
					echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
					echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
					echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
					echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
					echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
					echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
					echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
					echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
					echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
					echo "Horario : 14 <input type='time' name='Hora14'/><br/>";
							break;	

		case 15:
			echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
						
					echo "  <label>CRM:  </label> ";
					echo "<input name='CRM' type='num' value =$CRM   ><br>";
			
					echo "<label>Data:  </label> ";
					echo "<input name='Data' type='num'value =$Data   ><br>" ;
					echo "<label>Numero de Consultas:  </label> ";
					echo "<input name='num' type='num'value =$num   ><br>" ;
			
					echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
					echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
					echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
					echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
					echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
					echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
					echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
					echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
					echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
					echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
					echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
					echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
					echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
					echo "Horario : 14 <input type='time' name='Hora14'/><br/>";
					echo "Horario : 15 <input type='time' name='Hora15'/><br/>";
							break;	
							
	case 16:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
						
					echo "  <label>CRM:  </label> ";
					echo "<input name='CRM' type='num' value =$CRM   ><br>";
			
					echo "<label>Data:  </label> ";
					echo "<input name='Data' type='num'value =$Data   ><br>" ;
					echo "<label>Numero de Consultas:  </label> ";
					echo "<input name='num' type='num'value =$num   ><br>" ;
			
					echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
					echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
					echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
					echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
					echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
					echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
					echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
					echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
					echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
					echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
					echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
					echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
					echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
					echo "Horario : 14 <input type='time' name='Hora14'/><br/>";
					echo "Horario : 15 <input type='time' name='Hora15'/><br/>";
					echo "Horario : 16 <input type='time' name='Hora16'/><br/>";
							break;	
	case 17:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
						
					echo "  <label>CRM:  </label> ";
					echo "<input name='CRM' type='num' value =$CRM   ><br>";
			
					echo "<label>Data:  </label> ";
					echo "<input name='Data' type='num'value =$Data   ><br>" ;
					echo "<label>Numero de Consultas:  </label> ";
					echo "<input name='num' type='num'value =$num   ><br>" ;
			
					echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
					echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
					echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
					echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
					echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
					echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
					echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
					echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
					echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
					echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
					echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
					echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
					echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
					echo "Horario : 14 <input type='time' name='Hora14'/><br/>";
					echo "Horario : 15 <input type='time' name='Hora15'/><br/>";
					echo "Horario : 16 <input type='time' name='Hora16'/><br/>";
					echo "Horario : 17 <input type='time' name='Hora17'/><br/>";
							break;	
	case 18:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
						
					echo "  <label>CRM:  </label> ";
					echo "<input name='CRM' type='num' value =$CRM   ><br>";
			
					echo "<label>Data:  </label> ";
					echo "<input name='Data' type='num'value =$Data   ><br>" ;
					echo "<label>Numero de Consultas:  </label> ";
					echo "<input name='num' type='num'value =$num   ><br>" ;
			
					echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
					echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
					echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
					echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
					echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
					echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
					echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
					echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
					echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
					echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
					echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
					echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
					echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
					echo "Horario : 14 <input type='time' name='Hora14'/><br/>";
					echo "Horario : 15 <input type='time' name='Hora15'/><br/>";
					echo "Horario : 16 <input type='time' name='Hora16'/><br/>";
					echo "Horario : 17 <input type='time' name='Hora17'/><br/>";
					echo "Horario : 18 <input type='time' name='Hora18'/><br/>";
							break;	
	case 19:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
									
								echo "  <label>CRM:  </label> ";
								echo "<input name='CRM' type='num' value =$CRM   ><br>";
						
								echo "<label>Data:  </label> ";
								echo "<input name='Data' type='num'value =$Data   ><br>" ;
								echo "<label>Numero de Consultas:  </label> ";
								echo "<input name='num' type='num'value =$num   ><br>" ;
						
								echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
								echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
								echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
								echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
								echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
								echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
								echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
								echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
								echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
								echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
								echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
								echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
								echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
								echo "Horario : 14 <input type='time' name='Hora14'/><br/>";
								echo "Horario : 15 <input type='time' name='Hora15'/><br/>";
								echo "Horario : 16 <input type='time' name='Hora16'/><br/>";
								echo "Horario : 17 <input type='time' name='Hora17'/><br/>";
								echo "Horario : 18 <input type='time' name='Hora18'/><br/>";
								echo "Horario : 19 <input type='time' name='Hora19'/><br/>";
										break;	
			
	case 20:
		echo "<form method='POST' action='finaliza-agenda.php'>"; 
			
									
								echo "  <label>CRM:  </label> ";
								echo "<input name='CRM' type='num' value =$CRM   ><br>";
						
								echo "<label>Data:  </label> ";
								echo "<input name='Data' type='num'value =$Data   ><br>" ;
								echo "<label>Numero de Consultas:  </label> ";
								echo "<input name='num' type='num'value =$num   ><br>" ;
						
								echo "Horario : 1 <input type='time' name='Hora1'/><br/>";
								echo "Horario : 2 <input type='time' name='Hora2'/><br/>";
								echo "Horario : 3 <input type='time' name='Hora3'/><br/>";
								echo "Horario : 4 <input type='time' name='Hora4'/><br/>";
								echo "Horario : 5 <input type='time' name='Hora5'/><br/>";
								echo "Horario : 6 <input type='time' name='Hora6'/><br/>";
								echo "Horario : 7 <input type='time' name='Hora7'/><br/>";
								echo "Horario : 8 <input type='time' name='Hora8'/><br/>";
								echo "Horario : 9 <input type='time' name='Hora9'/><br/>";
								echo "Horario : 10 <input type='time' name='Hora10'/><br/>";
								echo "Horario : 11 <input type='time' name='Hora11'/><br/>";
								echo "Horario : 12 <input type='time' name='Hora12'/><br/>";
								echo "Horario : 13 <input type='time' name='Hora13'/><br/>";
								echo "Horario : 14 <input type='time' name='Hora14'/><br/>";
								echo "Horario : 15 <input type='time' name='Hora15'/><br/>";
								echo "Horario : 16 <input type='time' name='Hora16'/><br/>";
								echo "Horario : 17 <input type='time' name='Hora17'/><br/>";
								echo "Horario : 18 <input type='time' name='Hora18'/><br/>";
								echo "Horario : 19 <input type='time' name='Hora19'/><br/>";
								echo "Horario : 20 <input type='time' name='Hora20'/><br/>";
										break;	

}

echo "<button>Meu Botão</button></a>";


	?>



                </div>
              </form>
            </div>
          </div>

  </div>

</body>
</html>