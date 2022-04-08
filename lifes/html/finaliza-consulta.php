<html>
		
<head>
  <meta charset="UTF-8">

  <title>life's consulta</title>


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

$especialidade = $_SESSION['Especialidades'] ;

$CRM = $_GET['crm'];
$CNPJ = $_GET['cnpj'];
$CPF = $_GET['cpf'];
$dia = $_GET['d'];
$num = $_GET['num'];
$id=$_GET['id'];
switch ($num) {

		case 1:

			$hora= $_GET['hora'];
			if($hora =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";

			}else{

				echo"Estamos  finalizando seu agendamento <br>";

			// Deixa ocupado o horio selecionado na Tabela Agenda
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");

			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
		break;

		case 2:
			$hora2= $_GET['hora2'];
			if($hora2 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora2 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora2','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;
			
		case 3:
			$hora3= $_GET['hora3'];
			if($hora3 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora3 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora3','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;	
		
		case 4:
			$hora4= $_GET['hora4'];
			if($hora4 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora4 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora4','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;
		case 5: 
			$hora5= $_GET['hora5'];
			if($hora5 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora5 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora5','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}	
			break;

		case 6: 
			$hora6= $_GET['hora'];
			if($hora6 =='Ocupado6'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora6 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora6','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;
		
		case 7:
			$hora7= $_GET['hora7'];
			if($hora7 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora7 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora7','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;
		
		case 8:
			$hora8= $_GET['hora8'];
			if($hora8 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora8 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora8','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}	
			break;

		case 9:
			$hora9= $_GET['hora9'];
			if($hora9 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora9 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora9','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 10: 
			$hora10= $_GET['hora10'];
			if($hora10 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora10 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora10','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 11: 
			$hora11= $_GET['hora'];
			if($hora11 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora11 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora11','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 12: 
			$hora12= $_GET['hora12'];
			if($hora12 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora12 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora12','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 13: 
			$hora13= $_GET['hora13'];
			if($hora13 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora13 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora13','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}	
			break;

		case 14: 
			$hora14= $_GET['hora14'];
			if($hora14 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora14 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora14','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;
		
		case 15: 
			$hora15= $_GET['hora15'];
			if($hora15 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora15 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora15','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 16: 
			$hora16= $_GET['hora16'];
			if($hora16 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora16 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora16','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 17 : 
			$hora17= $_GET['hora17'];
			if($hora17 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora17 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora17','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 18: 
			$hora18= $_GET['hora18'];
			if($hora18 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora18 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora18','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;
		
		case 19: 
			$hora19= $_GET['hora19'];
			if($hora19 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora19 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora19','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}
			break;

		case 20: 
			$hora20= $_GET['hora20'];
			if($hora20 =='Ocupado'){
				echo "Este Horario Não esta disponivel, porfavor selicione outro";
			}else{
				echo"Vamos finalizar seu agendamento";
			$StringConexao = mysqli_connect('localhost', 'root','','tcc')
			or die('Não foi possivel conectar ao banco de dados');
			
			$sql = " UPDATE tbagenda SET Hora20 = 'Ocupado' WHERE Id = $id ";
			$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
			
			// Inseri dados na Tabela Consulta
			$sqlInsert = "INSERT INTO tbconsulta VALUES";
			$sqlInsert .= "($CNPJ,$CRM,$CPF,'','$dia','$hora20','Relalizar','$especialidade')";
			mysqli_query($StringConexao,$sqlInsert) or die ("Erro ao tentar marcar consulta");
				
			mysqli_close($StringConexao);
			echo "Consulta Marcada Com Sucesso";
			}





}


?>
</div>
          </div>

  </div>