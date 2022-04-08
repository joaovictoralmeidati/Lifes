<html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Escolher Hospital life's</title>

  <link rel="shortcut icon" href="../assets/icone.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style.css">
</head>


<div class="col-lg-8 py-3">
          <article class="blog-entry">
      

<?php



session_start();
$especialidade = $_POST['Especialidade'];
echo "$especialidade";








$StringConexao = mysqli_connect('localhost', 'root','','tcc')
or die('Não foi possivel conectar ao banco de dados');

$sql = "SELECT * FROM `tbespecialidade` RIGHT JOIN tbhospital ON tbhospital.CNPJ =tbespecialidade.CNPJ WHERE tbespecialidade.Especialidade = '$especialidade'";


$resultado = mysqli_query($StringConexao,$sql) or die ("Erro ao tentar consultar resgistro");


while ($resgitro = mysqli_fetch_array($resultado))
{
$_SESSION['CNPJH'] = $resgitro['CNPJ'];
$especialidade = $resgitro['Especialidade'];

$NomeH = $resgitro['NomeH'];
$EndereçoH = $resgitro['EnderecoH'];
$Telefone = $resgitro['TelefoneH'];
$CNPJ = $_SESSION['CNPJH'];
$_SESSION['Especialidadess'] =  $resgitro['Especialidade'];
$_SESSION['NomeH'] =  $resgitro['NomeH'];

echo " <div class='imagem'></div>";
echo "<h3>".$NomeH."</h3>";
echo "Endereço: ".$EndereçoH.  "  Telefone: ".$Telefone."<br>";



echo "<a href=escolherhorario.php?CNPJ=".$CNPJ.">  <button1> Escolher Este </button1></a> </a>";



}
mysqli_close($StringConexao);
echo "</table>";


?>

</article>
        </div>