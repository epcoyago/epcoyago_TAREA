<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/script.js"></script>
	

</head>

<body>

	<div style="padding-left:125px;">
		<h2>
			<p style="text-align: center";>DEPARTAMENTO DE CIENCIAS DE LA COMPUTACIÓN</p>
			<p style="text-align: center";>INGENIERÍA EN TECNOLOGIAS</p>
		</h2>
		<h3>
			<p style="text-align: center";>APLICACIONES DE TECNOLOGIAS WEB - PHP BASICO</p>
		</h3>
	</div>

	<div style="padding-left:90px;">
		<h3><p>Integrante: Coyago Eunice</p></h3>
		<h3><p>NRC: 8444</p></h3>
		<h3><p>Fecha de Entrega: 16/02/2023</p></h3>
		<h2>Ejercicio Autonomo</h2>
	</div>

	<?php
		include_once("include/class.figura.php");
		include_once("include/Interface.formulas.php");
		include_once("figuras/class.cuadrado.php");
		include_once("figuras/class.rectangulo.php");
		include_once("figuras/class.triangulo.php");
			
		if(isset($_GET['calcular'])){
			switch($_GET['tipo']){
				case "cuadrado": 
					$objCUADRADO = new cuadrado($_GET['lado_1']);
					break;
				case "rectangulo": 
					$objRECTANGULO = new rectangulo($_GET['lado_1'],$_GET['lado_2']);
					break;
				case "triangulo": 
					$objTRIANGULO = new triangulo($_GET['lado_1'],$_GET['lado_2'],$_GET['lado_3']);
			}	
		}

		echo figura::get_form();
		
	?>
	
</body>
</html>
