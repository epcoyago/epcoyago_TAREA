<?php
	class rectangulo extends figura{
	    private $lado1;
	    private $lado2;

	    function __construct($lado1, $lado2){
	    	$this->tipo = "rectangulo";
	        $this->lado1 = $lado1;
	        $this->lado2 = $lado2;
	    }
	    	public function area(){
		$this->a=($this->lado1 * $this->lado2);	
		}
			
		public function perimetro(){
			$this->p=($this->lado1 * 2+$this->lado2 * 2);
		}
	    public  function GetArea(){
	        return $this->lado1*$this->lado2;
	    }
		    
		    
	    public function GetPerimetro(){
	        $var=2*($this->lado1)+2*($this->lado2);
	        return $var;
	    }
	    
	    
	    public  function GetTipo(){
	    return "Rectangulo";
	    }
	}
?>
