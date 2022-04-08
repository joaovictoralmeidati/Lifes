<?php


$CNPJ = $_POST ['CNPJ'];
$CRM = $_POST ['CRM'];
$NomeM = $_POST ['NomeM'];
$TelefoneM = $_POST ['TelefoneM'];
$Especialidade = $_POST ['Especialidade'];
$Sexo = $_POST ['Sexo']; 
$Data_de_Nascimento = $_POST ['Data_de_Nascimento'];
$Email = $_POST ['Email'];
$Senha = $_POST ['Senha'];
//$Senha = password_hash($_POST['Senha'], PASSWORD_DEFAULT);

$StringConexao = mysqli_connect('localhost', 'root','','tcc')


or die('Não foi possivel conectar ao banco de dados');

$sqlInsert = "INSERT INTO tbmedico VALUES";
$sqlInsert .= "($CNPJ,$CRM,'$NomeM','$TelefoneM','$Especialidade','$Sexo','$Data_de_Nascimento','$Email','$Senha')";
mysqli_query($StringConexao,$sqlInsert) or die ("Infelismente não foi possivel se cadastrar");

mysqli_close($StringConexao);
echo "Usuario cadastrado com Sucesso! <br>";




 ?>