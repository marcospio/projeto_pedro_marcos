<?php


	include("classeCabecalho.php");
	
	include("classeTabela.php");
	include("classeBancoDeDados.php");


	$tabela[]="view_vacinacao_funcionario_animal";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_vacinacao as ID";
	$coluna[]= "funcionario as Funcionario";
	$coluna[]= "nome as Animal";
	$coluna[]= "data as 'Data Vacinacao'";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"vacinacao",true);
	try{
		$t->exibe();
	}
	catch(Exception $e){
		$e->get_message();
	};

?>