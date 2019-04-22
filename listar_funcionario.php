<?php

	include("classeCabecalho.php");
	
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="funcionario";
	
	$coluna[]= "id_funcionario as CPF";
	$coluna[]= "nome as Nome";
	$coluna[]= "telefone as Telefone";
	
	$condicao = null;
	$ordenacao = "nome";

	$bd = new BancoDeDados($conexao);
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"funcionario",true);
	
	$t->exibe();

?>