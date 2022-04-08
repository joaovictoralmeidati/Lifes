<?php

$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$base = "tcc";
	
	$conexao = new mysqli($servidor,$usuario,$senha,$base) or die ("ERRO COM A CONEXÃO COM O BANCO");
	
	

   
    
    if((isset($_POST['Email'])) && (isset($_POST['Senha']))){
        $Email = mysqli_real_escape_string($conexao, $_POST['Email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $Senha = mysqli_real_escape_string($conexao, $_POST['Senha']);
		
            
        $result_usuario = "SELECT * FROM tbpaciente WHERE Email = '$Email' && Senha = '$Senha'";
        $resultado_usuario = mysqli_query($conexao, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);		
		
		
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            //$_SESSION['usuarioId'] = $resultado['id'];
            //$_SESSION['usuarioNome'] = $resultado['nome'];
            //$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            //$_SESSION['usuarioEmail'] = $resultado['Email'];

                 header("Location: usuarioArq.php?CPF=".$resultado['CPF']."&NomeP=".$resultado['NomeP']."&TelefoneP=".$resultado['TelefoneP']."&EnderecoP=".$resultado['EnderecoP']."&Data_de_Nascimento=".$resultado['Data_de_Nascimento']."&sexo=".$resultado['sexo']."&Email=".$resultado['Email']);

        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            header("Location: login.html");
	
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        header("Location: usuarioArq.php");
    }
?>