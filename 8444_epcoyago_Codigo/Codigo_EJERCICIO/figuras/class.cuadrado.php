<?php
	class cuadrado extends figura implements formulas {
		private $lado;

	    function __construct($lado){
	        $this->lado = $lado;
	    }
	    
	    public function area(){
			$this->a=($this->lado1 * $this->lado1);	
		}
			
		public function perimetro(){
			$this->p=($this->lado1 * 4);
		}
		public  function GetArea(){
	        $var=$this->lado * $this->lado;
	        return $var;
	    }
		    
		    
	    public function GetPerimetro(){
	        return $this->lado*4;
	    }
	    
	    
	    public  function GetTipo(){
	        return "Cuadrado";
	    }
	}
?>
