<?php

	include("classeOption.php");

	class Select implements Exibicao{

		private $name;
		private $options;
		
		public function __construct($name,$options){
			$this->name=$name;

			foreach($options as $i=>$o){
				$this->options[] = new Option($o);
			}	
		}
		
		public function exibe(){
			echo "<select name='$this->name'>";
			
			foreach($this->options as $i=>$o){
				$o->exibe();
			}
			
			echo "</select> <br />";
		}
		
		
	}


?>