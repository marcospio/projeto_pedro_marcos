<?php

	include("classeCabecalho.php");
	include("classeForm.php");
	
	$parametros["action"]="validacao.php";
	$parametros["method"]="post";
	
	$f = new Form($parametros);
	
	$parametros=null;
	$parametros["type"]="email";
	$parametros["name"]="email";
	$parametros["placeholder"]="Digite o usuário...";
	$f->add_input($parametros);

	$parametros=null;
	$parametros["type"]="password";
	$parametros["name"]="senha";
	$parametros["placeholder"]="Digite a senha...";
	$f->add_input($parametros);
	
	$parametros = "Logar";
	$f->add_button($parametros);
	
	if(isset($_GET["erro"])){
		echo "Login e/ou senha inválidos.<hr />";
	}
	$f->exibe();

?>