<?php

	include("classeCabecalho.php");
	include("classeBancoDeDados.php");
	
	
	
	
	$operacao = new BancoDeDados($conexao);


	if(!empty($_FILES))
	{
		$uploaddir = 'img_upload/';
		$nome_arquivo = @date("YmdHis_"). basename($_FILES['foto_animal']['name']);
		$uploadfile = $uploaddir . $nome_arquivo;
		
		echo '<pre>';
		if (move_uploaded_file($_FILES['foto_animal']['tmp_name'], $uploadfile)) {
			/*echo "Arquivo válido e enviado com sucesso.\n";*/
		} else {
			echo "Animal salvo sem a foto!\n";
		}
		$_POST["foto_animal"] = "<img src='img_upload/$nome_arquivo' class= 'foto' />";
	}
	
	

	$operacao->insercao($_GET["tabela"],$_POST);




	echo $_GET["tabela"]." cadastrado(a) com sucesso.";


?>