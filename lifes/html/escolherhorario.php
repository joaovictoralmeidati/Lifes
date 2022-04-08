<html>
		<head>
	
  <link rel="stylesheet" type="text/css" href="css/2.css" media="screen" />
	
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Escolher Hospital life's</title>

  <link rel="shortcut icon" href="icone.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>

<center>

<div class="col-lg-6 py-5">
          
<?php
 
session_start();

$CNPJ= $_GET['CNPJ'];
$especialidade = $_SESSION['Especialidadess'];







echo " <div class='h'>";






$StringConexao = mysqli_connect('localhost', 'root','','tcc')
or die('Não foi possivel conectar ao banco de dados');

$sql = "SELECT * FROM tbagenda RIGHT JOIN tbmedico ON tbmedico.CRM = tbagenda.CRM RIGHT JOIN tbhospital ON tbhospital.CNPJ = tbagenda.CNPJ  WHERE  tbagenda.Situação LIKE '%livre%' AND  tbagenda.CNPJ = '$CNPJ' AND tbagenda.Especialidade = '$especialidade'  order by NomeM";


$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");

while ($resgitro = mysqli_fetch_array($resultado))
{

	
	
$ID = $resgitro['Id'];
$CRM = $resgitro['CRM'];
$Nome = $resgitro['NomeM'];
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$Data =   utf8_encode(ucwords(strftime('%A, %d de %B de %Y', strtotime(($resgitro['Data'])))));
$Data1 = $resgitro['Data'];



$Hora =$resgitro['Hora'];
$Hora2 =$resgitro['Hora2'];
$Hora3 =$resgitro['Hora3'];
$Hora4 =$resgitro['Hora4'];
$Hora5 =$resgitro['Hora5'];
$Hora6 =$resgitro['Hora6'];
$Hora7 =$resgitro['Hora7'];
$Hora8 =$resgitro['Hora8'];
$Hora9 =$resgitro['Hora9'];
$Hora10 =$resgitro['Hora10'];
$Hora11 =$resgitro['Hora11'];
$Hora12 =$resgitro['Hora12'];
$Hora13 =$resgitro['Hora13'];
$Hora14 =$resgitro['Hora14'];
$Hora15 =$resgitro['Hora15'];
$Hora16 =$resgitro['Hora16'];
$Hora17 =$resgitro['Hora17'];
$Hora18 =$resgitro['Hora18'];
$Hora19 =$resgitro['Hora19'];
$Hora20 =$resgitro['Hora20'];
$Situacao =$resgitro['Situação'];

$NomeH = $resgitro['NomeH'];
$Endereco = $resgitro['EnderecoH'];
$Telefone = $resgitro['TelefoneH'];

$_SESSION['NomeH'] =  $resgitro['NomeH'];
$_SESSION['EnderecoH'] =  $resgitro['EnderecoH'];
$_SESSION['TelefoneH'] =  $resgitro['TelefoneH'];
$_SESSION['Especialidades'] =  $resgitro['Especialidade'];


 
if($Hora2 == 'ocupado'){
	
	echo " <div class='hoario'>";

	echo " <br> $Data <br><br>";
	echo"  $Nome  <br><br>";

	
	echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";

	echo "</div>";
}elseif($Hora3 == 'ocupado'){
	
	echo " <div class='hoario'>";

	echo " <br> $Data <br><br>";
	echo"  $Nome  <br><br>";

	echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
	echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
	echo "</div>";

}elseif($Hora4 == 'ocupado'){
	
	echo " <div class='hoario'>";


	echo " <br> $Data <br><br>";
	echo"  $Nome  <br><br>";


	echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
	echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
	echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";

	echo "</div>";
	}elseif($Hora5 == 'ocupado'){

		echo " <div class='hoario'>";

		echo " <br> $Data <br><br>";
		echo"  $Nome  <br><br>";

		echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
		echo "</div>";

		}elseif($Hora6 == 'ocupado'){
		echo " <div class='hoario'>";
		echo " <br> $Data <br><br>";
		echo"  $Nome  <br><br>";
			
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
		echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
		echo "</div>";

			}elseif($Hora7 == 'ocupado'){
				echo " <div class='hoario'>";

				echo " <br> $Data <br><br>";
				echo"  $Nome  <br><br>";
				
		
				echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
				echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
				echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
				echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
				echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
				echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
				echo "</div>";
			}elseif($Hora8 == 'ocupado'){
					echo " <div class='hoario'>";

					echo " <br> $Data <br><br>";
					echo"  $Nome  <br><br>";
				
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";
					echo "</div>";
					
					}elseif($Hora9 == 'ocupado'){
						echo " <div class='hoario'>";

						echo " <br> $Data <br><br>";
						echo"  $Nome  <br><br>";
				
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
						echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
						echo "</div>";

						}elseif($Hora10 == 'ocupado'){

							echo " <div class='hoario'>";

							echo " <br> $Data <br><br>";
							echo"  $Nome  <br><br>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";
							echo "</div>";

							}elseif($Hora11 == 'ocupado'){
								echo " <div class='hoario'>";

								echo " <br> $Data <br><br>";
								echo"  $Nome  <br><br>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
							echo "</div>";

							}elseif($Hora12 == 'ocupado'){
								echo " <div class='hoario'>";

								echo " <br> $Data <br><br>";
								echo"  $Nome  <br><br>";
							
						
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
							
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";							
						
							echo "</div>";

							}elseif($Hora13 == 'ocupado'){

								echo " <div class='hoario'>";

								echo " <br> $Data <br><br>";
								echo"  $Nome  <br><br>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
							
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
							echo "</div>";

						}elseif($Hora14 == 'ocupado'){
								echo " <div class='hoario'>";

								echo " <br> $Data <br><br>";
								echo"  $Nome  <br><br>";

								echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
							
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
							echo "</div>";
							
							}elseif($Hora15 == 'ocupado'){
								echo " <div class='hoario'>";

								echo " <br> $Data <br><br>";
								echo"  $Nome  <br><br>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
							
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora14=".$Hora14."&num=14&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora14  </button> </a>";	
							echo "</div>";

							}elseif($Hora16 == 'ocupado'){
								echo " <div class='hoario'>";

								echo " <br> $Data <br><br>";
								echo"  $Nome  <br><br>";

								echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
							
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora14=".$Hora14."&num=14&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora14  </button> </a>";	
								echo " <a href=confirmarconsulta.php?id=".$ID."&hora15=".$Hora15."&num=15&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora15  </button> </a>";
							echo "</div>";

						}elseif($Hora17 == 'ocupado'){
		
							echo " <div class='hoario'>";

							echo " <br> $Data <br><br>";
							echo"  $Nome  <br><br>";
					
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
						
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora14=".$Hora14."&num=14&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora14  </button> </a>";	
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora15=".$Hora15."&num=15&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora15  </button> </a>";
							echo " <a href=confirmarconsulta.php?id=".$ID."&hora16=".$Hora16."&num=16&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora16  </button> </a>";
									
							echo "</div>";

						}elseif($Hora18 == 'ocupado'){
											echo " <div class='hoario'>";

											echo " <br> $Data <br><br>";
											echo"  $Nome  <br><br>";

											echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
										
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora14=".$Hora14."&num=14&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora14  </button> </a>";	
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora15=".$Hora15."&num=15&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora15  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora16=".$Hora16."&num=16&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora16  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora17=".$Hora17."&num=17&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora17  </button> </a>";
										echo "</div>";	
									
									}elseif($Hora19 == 'ocupado'){

										echo " <div class='hoario'>";

										echo " <br> $Data <br><br>";
										echo"  $Nome  <br><br>";

											echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
										
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora14=".$Hora14."&num=14&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora14  </button> </a>";	
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora15=".$Hora15."&num=15&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora15  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora16=".$Hora16."&num=16&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora16  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora17=".$Hora17."&num=17&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora17  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora18=".$Hora18."&num=18&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora18  </button> </a>";		
											echo "</div>";

										}elseif($Hora20 == 'ocupado'){
											echo " <div class='hoario'>";

											echo " <br> $Data <br><br>";
											echo"  $Nome  <br><br>";

											echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
										
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora14=".$Hora14."&num=14&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora14  </button> </a>";	
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora15=".$Hora15."&num=15&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora15  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora16=".$Hora16."&num=16&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora16  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora17=".$Hora17."&num=17&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora17  </button> </a>";
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora18=".$Hora18."&num=18&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora18  </button> </a>";					
											echo " <a href=confirmarconsulta.php?id=".$ID."&hora19=".$Hora19."&num=19&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora19  </button> </a>";
											echo "</div>";
											
										}else{

									echo " <div class='hoario'>";

									echo " <br> $Data <br><br>";
									echo"  $Nome  <br><br>";
									

									
						
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora=".$Hora."&num=1&d=".$Data1."&crm=".$CRM.">      <button class='btn'>$Hora   </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora2=".$Hora2."&num=2&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora2  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora3=".$Hora3."&num=3&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora3  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora4=".$Hora4."&num=4&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora4  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora5=".$Hora5."&num=5&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora5  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora6=".$Hora6."&num=6&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora6  </button> </a>";
						 			echo " <a href=confirmarconsulta.php?id=".$ID."&hora7=".$Hora7."&num=7&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora7  </button> </a>";			
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora8=".$Hora8."&num=8&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora8  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora9=".$Hora9."&num=9&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora9  </button> </a>";							 
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora10=".$Hora10."&num=10&d=".$Data1."&crm=".$CRM."> <button class='btn'>$Hora10 </button> </a>";
								
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora11=".$Hora11."&num=11&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora11  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora12=".$Hora12."&num=12&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora12  </button> </a>";	
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora13=".$Hora13."&num=13&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora13  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora14=".$Hora14."&num=14&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora14  </button> </a>";	
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora15=".$Hora15."&num=15&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora15  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora16=".$Hora16."&num=16&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora16  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora17=".$Hora17."&num=17&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora17  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora18=".$Hora18."&num=18&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora18  </button> </a>";					
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora19=".$Hora19."&num=19&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora19  </button> </a>";
									echo " <a href=confirmarconsulta.php?id=".$ID."&hora20=".$Hora20."&num=20&d=".$Data1."&crm=".$CRM.">    <button class='btn'>$Hora20  </button> </a>";
						
									echo "</div>";
		}

		

		
	}

	echo" </div>";


	echo"<div class='hospital'>";


	echo"$NomeH <br><br>";

	echo "$Endereco<br><br>";

	echo "$Telefone <br><br>";

	echo "$especialidade <br><br>";



echo " <a href='marcar-consulta.php'> Voltar  </a> <br>";
	
	echo" </div>";




mysqli_close($StringConexao);
echo "</table>";


?>

        </div>