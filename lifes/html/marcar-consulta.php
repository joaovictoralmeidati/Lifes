
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

  <title>life's Escolher Consulta</title>


  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<link rel="shortcut icon" href="../assets/icone.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/style.css">
</head>


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
              <h3 class="fw-normal">Escolha a especialidade</h3>
              <form method="POST" class="mt-3">
  
                <div class="mb-3">
                  <label for="select" class="fw-medium fg-grey">Especialidade</label>
                  <select id="disabledSelect" class="form-select" name="Especialidade">
                    <option value="ACUPUNTURA">ACUPUNTURA</option>
                    <option value="ALERGIA E IMUNOLOGIA">ALERGIA E IMUNOLOGIA</option>
                    <option value="CARDIOLOGIA">CARDIOLOGIA</option>
                    <option value="CIRURGIA GERAL">CIRURGIA GERAL</option>
                    <option value="CIRURGIA PEDIATRICA">CIRURGIA PEDIATRICA</option>
                    <option value="CIRURGIA PLASTICA">CIRURGIA PLASTICA</option>
                    <option value="CLINICA GERAL">CLINICA GERAL</option>
                    <option value="COLOPROCTOLOGIA">COLOPROCTOLOGIA</option>
                    <option value="ERMATOLOGIA">ERMATOLOGIA</option>
                    <option value="ENDOCRINOLOGIA">ENDOCRINOLOGIA</option>
                    <option value="GERIATRIA">GERIATRIA</option>
                    <option value="GINECOLOGIA E OBSTETRICIA">GINECOLOGIA E OBSTETRICIA</option>
                    <option value="MEDICINA ESPORTIVA">MEDICINA ESPORTIVA</option>
                    <option value="NUTRICIONISTA">NUTRICIONISTA</option>
                    <option value="NUTROLOGIA">NUTROLOGIA</option>
                    <option value="ODONTOLOGIA">ODONTOLOGIA</option>
                    <option value="ORTOPEDIA">ORTOPEDIA</option>
                    <option value="PEDIATRIA">PEDIATRIA</option>
                    <option value="PNEUMOLOGIA">PNEUMOLOGIA</option>
                    <option value="PSICOLOGIA">PSICOLOGIA</option>
                    <option value="PSIQUIATRIA">PSIQUIATRIA</option>
                    <option value="UROLOGIA">UROLOGIA</option>
                  </select>
                </div>
  
             
  
                <div class="form-group">
                  <label for="comen" class="fw-medium fg-grey">Coment??rio</label>
                  <textarea class="form-control" placeholder="Alguma especifica????o (opcional)" id="comentario" style="height: 100px"></textarea>
                </div>
  
      
                
      
                <div class="form-group mt-4">
                  <button type="submit" class="btn btn-primary" onclick = "adicionarAmigo();" data-dismiss="modal" ?CPF=<?php 	
          $CPF = $_GET['CPF'];
          $NomeP = $_GET['NomeP']; 
          echo $CPF?>&NomeP=<?php echo $NomeP?>> Pr??ximo </button>
                </div>
              </form>
            </div>
          </div>

  </div>

</form>
</body>
</html>

