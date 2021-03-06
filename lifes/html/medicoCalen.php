<html>
<head>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style2.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <title>Medico | Horario</title> <!-- nomezinho que aparece lá em cima -->

  <link rel="shortcut icon" href="../assets/icone-branco.png" type="image/x-icon"> <!-- icone q aparece lá em cima antes do nomezinho -->



</head>  
  <div class="wrapper">
  <main>
    <div class="toolbar">
      <div class="toggle">
        <div class="toggle__option">Semanal</div>
        <div class="toggle__option toggle__option--selected">Mensal</div>
      </div>
      <div class="current-month">Agosto 2021</div>
      <div class="search-input">
        <input type="text" value="Buscar">
        <i class="fa fa-search"></i>
      </div>
    </div>
    <div class="calendar">
      <div class="calendar__header">
        <div>Dom</div>
        <div>Seg</div>
        <div>Ter</div>
        <div>Qua</div>
        <div>Qui</div>
        <div>Sex</div>
        <div>Sab</div>
      </div>
      <div class="calendar__week">
        <div class="calendar__day day">1</div>
        <div class="calendar__day day">2</div>
        <div class="calendar__day day">3</div>
        <div class="calendar__day day">4</div>
        <div class="calendar__day day">5</div>
        <div class="calendar__day day">6</div>
        <div class="calendar__day day">7</div>
      </div>
      <div class="calendar__week">
        <div class="calendar__day day">8</div>
        <div class="calendar__day day">9</div>
        <div class="calendar__day day">10</div>
        <div class="calendar__day day">11</div>
        <div class="calendar__day day">12</div>
        <div class="calendar__day day">13</div>
        <div class="calendar__day day">14</div>        
      </div>
      <div class="calendar__week">
        <div class="calendar__day day">15</div>
        <div class="calendar__day day">16</div>
        <div class="calendar__day day">17</div>
        <div class="calendar__day day">18</div>
        <div class="calendar__day day">19</div>
        <div class="calendar__day day">20</div>
        <div class="calendar__day day">21</div>    
      </div>
      <div class="calendar__week">
        <div class="calendar__day day">22</div>
        <div class="calendar__day day">23</div>
        <div class="calendar__day day">24</div>
        <div class="calendar__day day">25</div>
        <div class="calendar__day day">26</div> 
        <div class="calendar__day day">27</div> 
        <div class="calendar__day day">28</div> 
      </div>
      <div class="calendar__week">
        <div class="calendar__day day">29</div>
        <div class="calendar__day day">30</div>
        <div class="calendar__day day">31</div>
        <div class="calendar__day day">1</div>
        <div class="calendar__day day">2</div>
        <div class="calendar__day day">3</div>
        <div class="calendar__day day">4</div>
      </div>
    </div>
  </main>
  <sidebar>
    <div class="logo">
	
	<?php
	
		$nome = $_GET['nome'];
		$data = $_GET['data'];
		$sexo = $_GET['sexo'];
		$CRM = $_GET['CRM'];
		$TelefoneM = $_GET['TelefoneM'];
		$CNPJ = $_GET['CNPJ'];
		
		$StringConexao = mysqli_connect('localhost', 'root','','tcc')or die('Não foi possivel conectar ao banco de dados');
		
		$sql3 = "SELECT NomeH FROM `tbhospital` where CNPJ = $CNPJ";
		
		$resultado3 = mysqli_query($StringConexao,$sql3) or die ("Erro ao tentar consultar resgistro");
		
		while (($registro3 = mysqli_fetch_array($resultado3))){
						
						echo "<tr>";
						$NomeH = $registro3['NomeH'];
						
						echo "<td>".$NomeH."</td>";
					}
	
	?></div>
    <div class="avatar">
      <div class="avatar__img">
        <img src="https://picsum.photos/70" alt="avatar">
      </div>
      <div class="avatar__name"> bem vindo

		<?php 
		
		
		echo $nome;
		
		?>
	  
	  </div>
	  
    </div>
    <nav class="menu">
      <a class="menu__item" href="medicoCons.php?nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-home"></i>
        <span class="menu__text">Consultas</span>
      </a>
      <a class="menu__item menu__item--active" href="medicoCalen.php?nome=<?php echo $CRM?>&nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Calendario</span>
      </a>
      <a class="menu__item" href="medicoArq.php?nome=<?php echo $nome?>&data=<?php echo $data?>&sexo=<?php echo $sexo?>&CRM=<?php echo $CRM?>&TelefoneM=<?php echo $TelefoneM?>&CNPJ=<?php echo $CNPJ?>">
        <i class="menu__icon fa fa-calendar"></i>
        <span class="menu__text">Dados</span>
      </a>
      <a class="menu__item" href="index.html">
        <i class="menu__icon fa fa-bar-chart"></i>
        <span class="menu__text">Menu</span>
      </a>
      
    </nav>
    <div class="copyright">life's &copy; inovation</div>
  </sidebar>
</div>


</html>