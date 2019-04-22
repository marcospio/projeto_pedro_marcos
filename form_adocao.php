<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("autenticacao.php");
	include("conexao.php");
	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=adocao";
	$parametros["method"] = "post";
	
	
	$f = new Form($parametros);

	$consulta = "SELECT id_animal as value, nome as label 
							FROM animal ORDER BY nome";

	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha=$stmt->fetch()){
		$animais[] = $linha;
	}	

	$f->add_select("id_animal",$animais);


	$consulta = "SELECT id_adotante as value, nome as label 
							FROM adotantes ORDER BY nome";
	$stmt = $conexao->prepare($consulta);
	$stmt->execute();
	while($linha=$stmt->fetch()){
		$adotantes[] = $linha;
	}	
	$parametros["label"]="Funcionário";
	
	$f->add_select("id_adotante",$adotantes);

		
	$parametros = null;
	$parametros["name"] = "data";
	$parametros["type"] = "date";
	$parametros["label"] = "Data Adoção";	
	$f->add_input($parametros);	
	
	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>