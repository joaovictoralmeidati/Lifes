<?php

$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$base = "tcc";
	
	$conexao = new mysqli($servidor,$usuario,$senha,$base) or die ("ERRO COM A CONEXÃO COM O BANCO");




if( isset($_GET['buscar'])){
	

$nome = $_GET['buscar'];

$query = "SELECT * FROM EMERGENCIA_SAMU WHERE NOME LIKE '$nome%' ";

$sql = $conexao -> query($query);

echo "<table class='table table-hover'>";
echo "<thead>
		<th> ID </th>
		<th> NOME </th>
		<th> EMAIL </th>
		<th> TELEFONE </th>
		<th> URGENCIA </th>
		<th> CEP </th>
		<th> RUA </th>
		<th> BAIRRO </th>
		<th> CIDADE </th>
		<th> ESTADO </th>
		<th> NUMEROCOMP </th>
		<th> COMPLEMENTO </th>
		</thead>"; 

while($linha = $sql -> fetch_array()){
echo "<tr>";
	echo "<td>".$linha['id']."</td>";
	echo "<td>".$linha['nome']."</td>";
	echo "<td>".$linha['email']."</td>";
	echo "<td>".$linha['telefone']."</td>";
	echo "<td>".$linha['urgencia']."</td>";
	echo "<td>".$linha['cep']."</td>";
	echo "<td>".$linha['rua']."</td>";
	echo "<td>".$linha['bairro']."</td>";
	echo "<td>".$linha['cidade']."</td>";
	echo "<td>".$linha['estado']."</td>";
	echo "<td>".$linha['numerocomp']."</td>";
	echo "<td>".$linha['complemento']."</td>";
	echo "</tr>";
	
}	
echo "</table>";
}


else if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['telefone']) && isset($_GET['urgencia']) && isset($_GET['cep']) && isset($_GET['rua']) && isset($_GET['bairro']) && isset($_GET['cidade']) && isset($_GET['estado']) && isset($_GET['numerocomp']) && isset($_GET['complemento']) ){
	
	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$urgencia = $_GET['urgencia'];
	$cep = $_GET['cep'];
	$rua = $_GET['rua'];
	$bairro = $_GET['bairro'];
	$cidade = $_GET['cidade'];
	$estado = $_GET['estado'];
	$numerocomp = $_GET['numerocomp'];
	$complemento = $_GET['complemento'];
	
	$query = "INSERT INTO EMERGENCIA_SAMU (nome,email,telefone,urgencia,cep,rua,bairro,cidade,estado,numerocomp,complemento) VALUES ('$nome','$email','$telefone','$urgencia','$cep','$rua','$bairro','$cidade','$estado','$numerocomp','$complemento')";
	
	$sql = $conexao -> query($query);
	
	
	
	
}


?>