//função acionada ao aperta o botão de pesquisar
function buscaDados(){
	
	// variavel com o nome pesquisado
	var nome = document.getElementById("buscar").value;
	
	// armazanar as informações que serão exibidas no html
	var resultado = document.getElementById("dados");
	
	//Instanciando objeto ajax responsavel por fazer as solicitações de forma assincrona
	var ajax = new XMLHttpRequest();
	
	ajax.open("GET","acao.php?buscar="+nome,true);
	
	ajax.onreadystatechange = function(){
		
		if(ajax.readyState == 4){
				
				if(ajax.status == 200){
					
					resultado.innerHTML = ajax.responseText;
					
				}else {
				resultado.innerHTML = "OCORREU UM ERRO" + ajax.statusText;
				}
		}
	};

//Enviar os dados
ajax.send(null);	

}

function adicionarSamu(){
	
	var nome = document.getElementById("nome").value;
	
	var email = document.getElementById("email").value;
	
	var telefone = document.getElementById("telefone").value;

	var urgencia = document.getElementById("urgencia").value;
	
	var cep = document.getElementById("cep").value;
	
	var rua = document.getElementById("rua").value;
	
	var bairro = document.getElementById("bairro").value;
	
	var cidade = document.getElementById("cidade").value;
	
	var estado = document.getElementById("estado").value;
	
	var numerocomp = document.getElementById("numerocomp").value;
	
	var complemento = document.getElementById("complemento").value;
	
	var resultado = document.getElementById("dados");
	
	var ajax = new XMLHttpRequest();
	
	ajax.open("GET","acao.php?nome="+nome+"&email="+email+ "&telefone="+telefone+  "&urgencia="+urgencia+ "&cep="+cep+ "&rua="+rua+ "&bairro="+bairro+ "&cidade="+cidade+ "&estado="+estado+ "&numerocomp="+numerocomp+ "&complemento="+complemento,true);
	
	
	ajax.onreadystatechange = function(){
		
		if(ajax.readyState == 4){
				
				if(ajax.status == 200){
					
					resultado.innerHTML = ajax.responseText;
					
				}else {
				resultado.innerHTML = "OCORREU UM ERRO" + ajax.statusText;
				}
		}
	};

//Enviar os dados
ajax.send(null);	
}

