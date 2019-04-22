<?php
	include("classeCabecalho.php");
	include("classeForm.php");
	include("autenticacao.php");
	include("conexao.php");
	
	
	$parametros = null;
	$parametros["action"] = "insere.php?tabela=adotantes";
	$parametros["method"] = "post";
	
	$f = new Form($parametros);
	
	$parametros = null;
	$parametros["name"] = "id_adotante";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o cpf do adotante...";	
	$f->add_input($parametros);

    $parametros = null;
	$parametros["name"] = "nome";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o nome do adotante...";	
	$f->add_input($parametros);

	$parametros = null;
	$parametros["name"] = "telefone";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o telefone do adotante...";	
	$f->add_input($parametros);

    $parametros = null;
	$parametros["name"] = "endereco";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite o endereco do adotante...";	
	$f->add_input($parametros);
	
	$parametros = null;
	$parametros["name"] = "especie_interesse";
	$parametros["type"] = "text";
	$parametros["placeholder"] = "Digite a especie de interesse...";	
	$f->add_input($parametros);

	
	$parametros = null;
	$parametros["name"] = "idade_interesse";
    $parametros["type"] = "number";
    $parametros["step"] = "0.1";
	$parametros["label"] = "Idade interesse:";	
	$f->add_input($parametros);

	
	$parametros = "Enviar";
	$f->add_button($parametros);
	
	
	$f->exibe();
	
?>
