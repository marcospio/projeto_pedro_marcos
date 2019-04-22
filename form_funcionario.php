<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("autenticacao.php");
	include("conexao.php");
	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=funcionario";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "id_funcionario";
	$parametros["type"] = "number";
	$parametros["placeholder"] = "Digite o cpf do funcionário...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "nome";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome do funcionário...";	
	$f->add_input($parametros);
	
	$parametros = null;
	$parametros["name"] = "telefone";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o telefone do funcionário...";	
	$f->add_input($parametros);

	
	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
