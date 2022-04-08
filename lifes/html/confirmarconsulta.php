<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>confirmar Consulta life's</title>

  <link rel="shortcut icon" href="icone.png" type="image/x-icon">

  <link rel="stylesheet" href="css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<center>

<body>


<form method="POST" action="escolherhopsital.php">


<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
  <a class="navbar-brand" href="index.html">
      <img src="../assets/icone.png" alt="" width="80">
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
$NomeH = $_SESSION['NomeH'];
$EnderecoH = $_SESSION['EnderecoH'];
$TelefoneH = $_SESSION['TelefoneH'];
$CNPJ = $_SESSION['CNPJH'];




$num = $_GET['num'];
$id=$_GET['id'];

switch ($num) {

		case 1:

			$hora= $_GET['hora'];
			$CRM= $_GET['crm'];
			if($hora =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

				echo "<h1> Atenção Confirme os Dados  </h1><br>";

				echo "<h1> Dados da Consulta</h1>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";
				echo"$Nome <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora <br>";
				echo " $Data <br>";

				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button class='btn btn-primary'> Voltar</button></a>";

				echo " <a  href=finaliza-consulta.php?id=".$id."&hora=".$hora."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn btn-primary'> Enviar   </button> </a>";
				
			}
		break;

		case 2:
			$hora2= $_GET['hora2'];
			$CRM= $_GET['crm'];
			if($hora2 =='Ocupado'){

				echo "Este Horário Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora2 <br>";
				echo " $Data <br";
			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora2."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
				
			}
			
			break;
			
		case 3:
			$hora3= $_GET['hora3'];
			$CRM= $_GET['crm'];
			if($hora3 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora3 <br>";
				echo " $Data <br>";
			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora3."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}

			break;	
		
		case 4:
			$hora4= $_GET['hora4'];
			$CRM= $_GET['crm'];
			if($hora4 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora4 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora4."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			
			break;
		case 5: 
			$hora5= $_GET['hora5'];
			$CRM= $_GET['crm'];
			if($hora5 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora5 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				
				$CPF = $_SESSION['CPF'];
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora5."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 6: 
			$hora6= $_GET['hora'];
			$CRM= $_GET['crm'];
			if($hora6 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora6 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora6."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;
		
		case 7:
			$hora7= $_GET['hora7'];
			$CRM= $_GET['crm'];
			if($hora7 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora7 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora7."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;
		
		case 8:
			$hora8= $_GET['hora8'];
			$CRM= $_GET['crm'];
			if($hora8 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora8 <br>";
				echo " $Data <br>";

			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora8."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
	
			break;

		case 9:
			$hora9= $_GET['hora9'];
			$CRM= $_GET['crm'];
			if($hora9 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora9 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora9."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 10: 
			$hora10= $_GET['hora10'];
			$CRM= $_GET['crm'];
			if($hora10 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));
				echo " $hora10";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora10."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
				
			}
			break;

		case 11: 
			$hora11= $_GET['hora'];
			$CRM= $_GET['crm'];
			if($hora11 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora11 <br>";
				echo " $Data <br>";

			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora11."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 12: 
			$hora12= $_GET['hora12'];
			$CRM= $_GET['crm'];
			if($hora12 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora12 <br>";
				echo " $Data <br>";

			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora12."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 13: 
			$hora13= $_GET['hora13'];
			$CRM= $_GET['crm'];
			if($hora13 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora13 <br>";
				echo " $Data <br>";

			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora13."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 14: 
			$hora14= $_GET['hora14'];
			$CRM= $_GET['crm'];
			if($hora14 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora14 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora14."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;
		
		case 15: 
			$hora15= $_GET['hora15'];
			$CRM= $_GET['crm'];
			if($hora15 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora15 <br>";
				echo " $Data <br>";

			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora15."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 16: 
			$hora16= $_GET['hora16'];
			$CRM= $_GET['crm'];
			if($hora16 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora16 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora16."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 17 : 
			$hora17= $_GET['hora17'];
			$CRM= $_GET['crm'];
		   
			if($hora17 =='Ocupado'){

				echo "Este Horario Não esta disponivel, por favor selecione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora17 <br>";
				echo " $Data <br>";

			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora17."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		case 18: 
			$hora18= $_GET['hora18'];
			$CRM= $_GET['crm'];
			if($hora18 =='Ocupado'){

				echo "Este Horario Não esta disponivel, porfavor selicione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora18 <br>";
				echo " $Data <br>";

				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora18."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;
		
		case 19: 
			$hora19= $_GET['hora19'];
			$CRM= $_GET['crm'];
			if($hora19 =='Ocupado'){

				echo "Este Horario Não esta disponivel, porfavor selicione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora19 <br>";
				echo " $Data <br>";

			
				echo "<h2> Dados do Paciente </h2>";
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

                $CPF = $_SESSION['CPF'];

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora19."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
		
			break;

		case 20: 
			$hora20= $_GET['hora20'];
			$CRM= $_GET['crm'];
			if($hora20 =='Ocupado'){

				echo "Este Horario Não esta disponivel, porfavor selicione outro";

			}else{
				$StringConexao = mysqli_connect('localhost', 'root','','tcc')
				or die('Não foi possivel conectar ao banco de dados');
				
				$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbmedico.CRM  ='$CRM'";
				
				
				$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");
				
				while ($resgitro = mysqli_fetch_array($resultado))
				{
				
					
					
				
				$CRM = $resgitro['CRM'];
				$Nome = $resgitro['NomeM'];
				}

			
				echo "<h1> Atenção Confirme os Dados  </h1><br>";
				echo "<h2> Dados da Consulta</h2>";

				echo" $NomeH <br>";

				echo " $EnderecoH <br>";

				echo " $especialidade <br>";

				$dia = $_GET['d'];
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($dia)))));

				echo " $hora20 <br>";
				echo " $Data <br>";

				
				echo "<h2> Dados do Paciente </h2>";
				$CPF = $_SESSION['CPF'];
				echo "Olá ".$_SESSION['nome'].",  seu CPF é" .$_SESSION['CPF'].  "<br>";

            

				echo "<a href='marcar-consulta.php'><button> Voltar</button></a>";

				echo " <a href=finaliza-consulta.php?id=".$id."&hora=".$hora20."&num=1&d=".$dia."&crm=".$CRM."&cnpj=".$CNPJ."&cpf=".$CPF."> <button class='btn'> Enviar   </button> </a>";
				
			}
			break;

		}


?>
</div>
          </div>
		  </div>
          </div>
		  </div>
          </div>