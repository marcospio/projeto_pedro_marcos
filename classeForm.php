<?php
		
	include("classeInputOpcoes.php");
	include("classeSelect.php");
	include("classeButton.php");

	class Form implements Exibicao{
		
		private $action;
		private $method;		
		public $entradas;
		private $enctype;
		
		public function __construct($parametros){
			
			$this->action = $parametros["action"];
			$this->method = $parametros["method"];
			if(isset($parametros["enctype"]))
			{
				$this->enctype = $parametros["enctype"];
			}
			
		}

		public function add_button($parametros){
			$this->entradas[] = new Button($parametros);
		}
		
		public function add_input($parametros){
			$this->entradas[] = new Input($parametros);
		}
		
		public function add_inputOpcoes($parametros){
			$this->entradas[] = new InputOpcoes($parametros);
		}		
		
		public function add_select($name,$options){
			$this->entradas[] = new Select($name,$options);
		}
		
		
		public function exibe(){
			
			echo "<form method='$this->method' action='$this->action'";
			
			if($this->enctype!=null){
				echo " enctype='$this->enctype' ";
			}
			echo">";
						
			
			foreach($this->entradas as $i=>$e){
				$e->exibe();
			}
				
			echo "</form>";
		}
		
		
	}


?>