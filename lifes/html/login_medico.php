<?php
SESSION_START();

$_SESSION['nome'] = $nome;

$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$base = "tcc";
	
	$conexao = new mysqli($servidor,$usuario,$senha,$base) or die ("ERRO COM A CONEXÃO COM O BANCO");
	
	

   
    
    if((isset($_POST['CRM'])) && (isset($_POST['Senha']))){
        $CRM = mysqli_real_escape_string($conexao, $_POST['CRM']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $Senha = mysqli_real_escape_string($conexao, $_POST['Senha']);
		
            
        $result_usuario = "SELECT * FROM tbmedico WHERE CRM = '$CRM' && Senha = '$Senha'";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);		
		
		
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            //$_SESSION['usuarioId'] = $resultado['id'];
			//$nome= <script>document.write(localStorage.setItem('nome', $resultado['NomeM'] ));</script>;
            //$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            //$_SESSION['usuarioEmail'] = $resultado['Email'];

                header("Location: medicoCalen.php?nome=".$resultado['NomeM']."&data=".$resultado['Data_de_Nascimento']."&sexo=".$resultado['Sexo']."&CRM=".$resultado['CRM']."&TelefoneM=".$resultado['TelefoneM']."&CNPJ=".$resultado['CNPJ']);
				

        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            header("Location: loginmedico.html");
	
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        header("Location: medicoCalen.php?nome=".$resultado['NomeM']);
    }
?>