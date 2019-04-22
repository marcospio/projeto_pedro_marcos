<?php

	include("interfaceExibicao.php");

	class Cabecalho implements Exibicao{
	
		private $charset;
		private $title;
		private $links;
		private $scripts;
		
		public function __construct($parametros){
			$this->charset = $parametros["charset"];
			$this->title = $parametros["title"];
			if(isset($parametros["links"])){
				$this->links = $parametros["links"];
			}
			if(isset($parametros["scripts"])){
				$this->scripts = $parametros["scripts"];
			}
		}
		
		public function exibe(){
			session_start();
			echo "<!DOCTYPE html>
					<html>
					<head>
						<meta charset='$this->charset' />
						 <title>$this->title</title>";
			if($this->links!=null){
					foreach($this->links as $i=>$l){
						echo "<link rel='stylesheet' href='$l' />";
					}
			}			 
			if($this->scripts!=null){
					foreach($this->scripts as $i=>$s){
						echo "<script type='text/javascript' src='$s'></script>";
					}
			}
			echo "
					</head>	
						<body>";
			
			$this->exibe_menu();
		}
		
		public function exibe_menu(){
			
			echo "<div id='menu'>

			<h1>Central Pet</h1>
					Listar: 
						<div>
							<img src = 'img/logo.jpg' class = 'logo'>
						</div>
						<ul>
							<li>
								<a href='listar_animais.php'>
								Animal
								</a>
							</li>
							<li>
								<a href='listar_funcionario.php'>
								Funcionário
								</a>
							</li>
							<li>
								<a href='listar_vacinacao.php'>
								Vacinação
								</a>
							</li>
							<li>
								<a href='listar_adotantes.php'>
								Adotante
								</a>
							</li>
							<li>
								<a href='listar_adocao.php'>
								Adoção
								</a>
							</li>							
						</ul>";
						
						
					if(isset($_SESSION["usuario"])){	
					echo "Cadastrar: 
						<ul>
							<li>
								<a href='form_animal.php'>
								Animal
								</a>
							</li>
							<li>
								<a href='form_funcionario.php'>
								Funcionario
								</a>
							</li>
							<li>
								<a href='form_vacinacao.php'>
								Vacinação
								</a>
							</li>
							<li>
								<a href='form_adotante.php'>
								Adotante
								</a>
							</li>
							<li>
								<a href='form_adocao.php'>
								Adoção
								</a>
							</li>							
						</ul>";
						
						echo "<a href='logout.php'>Sair</a>";
					}
					else{
						echo "<a href='form_login.php'>Login</a>";
					}
				 echo "
				 </div>
				 <hr />";
		}
	
	}
	
	
	$parametros["charset"]="utf-8";
	$parametros["title"]="Central Pet";
	$parametros["links"][] = "estiloTable.css";

	
	$c = new Cabecalho($parametros);
	$c->exibe();	
	
?>


	