<?php


	include("classeCabecalho.php");
	
	include("classeTabela.php");
	include("classeBancoDeDados.php");

	$tabela[]="adotantes";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_adotante as CPF";
	$coluna[]= "nome as Nome";
	$coluna[]= "telefone as Telefone";
	$coluna[]= "endereco as Endereço";
	$coluna[]= "especie_interesse as 'Especie Interesse'";
	$coluna[]= "idade_interesse as 'Idade Interesse'";


	$condicao = null;
	$ordenacao = "nome";
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"adotantes",true);
	
	$t->exibe();

?>