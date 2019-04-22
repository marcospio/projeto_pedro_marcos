<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("autenticacao.php");
	include("conexao.php");
	
	

	$parametros = null;
	$parametros["enctype"]="multipart/form-data";
	$parametros["action"] = "insere.php?tabela=animal";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "nome";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome do animal...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "raca";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite a raça do animal...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "peso";
	$parametros["type"] = "number";
	$parametros["step"] = "0.1";
	$parametros["placeholder"] = "Digite o peso do animal...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "sexo";
	$parametros["type"] = "radio";
	$parametros["opcoes"] = array("m"=>"Macho.","f"=>"Fêmea.");
	$parametros["label"] = "Sexo";	
	$f->add_inputOpcoes($parametros);
	
	$parametros = null;
	$parametros["name"] = "idade";
	$parametros["type"] = "number";
	$parametros["step"] = "0.1";
	$parametros["placeholder"] = "Digite a idade do animal em meses...";	
	$f->add_input($parametros);	

	$parametros = null;
	$parametros["name"] = "especie";
	$parametros["type"] = "text";
	$parametros["label"] = "Espécie";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "foto_animal";
	$parametros["type"] = "file";
	$parametros["label"] = "Foto do animal:";	
	$f->add_input($parametros);

	
	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>

