<?php


$NomeP = $_POST ['NomeP'];
$Data_de_Nascimento = $_POST ['Data_de_Nascimento'];
$sexo = $_POST ['sexo'];
$CPF = $_POST ['CPF'];
$TelefoneP = $_POST ['TelefoneP'];
$EnderecoP = $_POST ['EnderecoP']; 

$Email = $_POST ['Email'];
$Senha = $_POST ['Senha'];
//$Senha = password_hash($_POST['Senha'], PASSWORD_DEFAULT);

$StringConexao = mysqli_connect('localhost', 'root','','tcc')


or die('Não foi possivel conectar ao banco de dados');

$sqlInsert = "INSERT INTO tbpaciente VALUES";
$sqlInsert .= "($CPF,'$NomeP','$TelefoneP','$EnderecoP','$Data_de_Nascimento','$sexo','$Email','$Senha')";
mysqli_query($StringConexao,$sqlInsert) or die ("Infelismente não foi possivel se cadastrar");

mysqli_close($StringConexao);





 ?>
 
 <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="description" content="Mobile Application HTML5 Template">

  <title>life's Confirmação</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
<!-- inicio --><nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="../assets/icone-branco.png" alt="" width="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
  </div>
</nav>
  
<div class="page-hero-section bg-image hero-home-1" style="background-image: url(../assets/img/fundo-logina.svg);">
  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
       
        <div class="col-md-7 ">
          <div class="card-page">
            <h3 class="fw-normal">Pronto!</h3>
            <form method="POST" class="mt-3">
        

              <p class="d-inline-block ml-2">Cadastrato com sucesso.<a href="login.html" class="fg-dark fw-medium"> Voltar</a>
    
              
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <script src="../assets/js/jquery.js"></script>

  <script src="../assets/js/bootstrap.js"></script>
</body>
</html>



