<?php
	$v=[0,0,0,0,0];
	$v1=['a','b','c','d','e'];
	$v3=['A','B','C','D','E'];
	$v2=[0,0,0,0,0];
	$ca=0;$cb=0;$cc=0;$cd=0;$ce=0;

	if(isset($_POST['enviar'])){

		for($i=0;$i<25;$i++){
			$var;
			if($i==0){
				$var=$_POST['c1'];

			}
			if($i==1){
				$var=$_POST['c2'];

			}
			if($i==2){
				$var=$_POST['c3'];

			}
			if($i==3){
				$var=$_POST['c4'];

			}if($i==4){
				$var=$_POST['c5'];

			}
			if($i==5){
				$var=$_POST['c6'];

			}if($i==6){
				$var=$_POST['c7'];

			}
			if($i==7){
				$var=$_POST['c8'];

			}if($i==8){
				$var=$_POST['c9'];

			}
			if($i==9){
				$var=$_POST['c10'];

			}
			if($i==10){
				$var=$_POST['c11'];

			}
			if($i==11){
				$var=$_POST['c12'];

			}
			if($i==12){
				$var=$_POST['c13'];

			}
			if($i==13){
				$var=$_POST['c14'];

			}
			if($i==14){
				$var=$_POST['c15'];

			}
			if($i==15){
				$var=$_POST['c16'];

			}
			if($i==16){
				$var=$_POST['c17'];

			}
			if($i==17){
				$var=$_POST['c18'];

			}
			if($i==18){
				$var=$_POST['c19'];

			}
			if($i==19){
				$var=$_POST['c20'];

			}
			if($i==20){
				$var=$_POST['c21'];

			}
			if($i==21){
				$var=$_POST['c22'];

			}
			if($i==22){
				$var=$_POST['c23'];

			}
			if($i==23){
				$var=$_POST['c24'];

			}
			if($i==24){
				$var=$_POST['c25'];

			}

			if($var=='a'){
				$ca++;
			}
			if($var=='b'){
				$cb++;

			}
			if($var=='c'){
				$cc++;
			}if($var=='d'){
				$cd++;
			}if($var=='e'){
				$ce++;
			}

				
		}

		$v[0]=$ca;$v[1]=$cb;$v[2]=$cc;$v[3]=$cd;$v[4]=$ce;

		$v2[0]=$ca;$v2[1]=$cb;$v2[2]=$cc;$v2[3]=$cd;$v2[4]=$ce;

			for($i=0;$i<5-1;$i++){
				for($j=$i+1;$j<5;$j++){
					if($v[$i]<$v[$j]){
						$auxiliar = $v3[$i];
						$v3[$i]=$v3[$j];
						$v3[$j] = $auxiliar;
						$aux=$v[$i];
						$v[$i]=$v[$j];
						$v[$j]=$aux;

					}
				}
			}
			

			}


	
$vt = array('A' => "Tus actividades van encaminadas hacia los aspectos administrativos, económicos y de organización. Tu interés es generar riquezas mediante planeación de procedimientos, así como encaminar el logro de objetivos del algún grupo de personas.",
'B' => "Ser analítico es parte de tu esencia, el diseño y construcción de mecanismos para satisfacer necesidades es parte de tu interés ya que facilitarías la vida diaria. El manejo de materiales para crear algo original y que mejore los avances científicos." 
,
'C' => "El bienestar y la mejora de calidad de vida de otros es una de tus motivaciones para que las mismas puedan lograr una salud física y mental, la convivencia con la gente te permite conocer su comportamiento para llegar a un objetivo determinado.
"
,
'D' => "Tu desarrollo se logrará cuando interactúes con seres vivos y organismos. Te interesa conocer cómo es el funcionamiento de diversas sustancias, si es necesario, buscar su equilibrio y restablecer el funcionamiento previo a una alteración. La modificación y preservación de componentes orgánicos y naturales son también parte de tu interés.
"
,
'E' => "Te apasiona todo aquello que se encuentra relacionado con el arte, la música, lo bello y lo estético. Es de suma importancia tu sensibilidad y tu imaginación. Para comunicar tus ideas y emociones utilizas tu creatividad de manera visual o auditiva pero siempre son atractivas.
");
$vc = array('A' => "

Carreras relacionadas: Contaduría Pública, Economía, Administración de Empresas, Mercadotecnia, Comercio Internacional, Ciencias Políticas, Derecho, Relaciones Industriales, Turismo.",
'B' => "

Carreras relacionadas: Ingeniería civil, Ingeniero Arquitecto, Ingeniería Industrial y de Sistemas, Ingeniería en Computación." 
,
'C' => "

Carreras relacionadas: Enfermería, Pedagogía, Nutrición, Trabajo Social, Psicología, Sociología, Educación."
,
'D' => "

Carreras relacionadas: Biología, Química, Ecología, Medicina, Veterinaria, Biotecnología, Ciencias Naturales."
,
'E' => "
Carreras relacionadas: Diseño Ambiental, Arquitectura, Ciencias y técnicas de la Comunicación, Artes, Comunicación Gráfica.");


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="background-color: rgba(0, 0,15, 0.9);padding: 45px;">
		<h1 style="color:white" align="center">RESULTADO DEL TEST VOCACIONAL</h1>
		<h1 style="color:white"><?php
		for($i=0;$i<5;$i++){
			echo $v1[$i]." = ".$v2[$i]."<br>";
		}
	echo "<br>";
	
	?>

	</h1>
	<h1 align="center" style="color:white">Tus maximas notas son: <?php  
	if($v[0] !=0){
		echo $v3[0].": ".$v[0];
	}
	if($v[1] !=0){
		echo " y ".$v3[1].": ".$v[1];
	}
	?>
	</h1>

	<h3></h3>
	<h3 style="color:green">
	<?php
	echo "<br>";
	if($v[0] !=0){
		echo $v3[0].": ".$vt[$v3[0]];
		echo "<br>";echo "<br>";
		echo $vc[$v3[0]];
	}
	echo "<br>";echo "<br>";echo "<br>";
	if($v[1] !=0){
		echo $v3[1].": ".$vt[$v3[1]];
		echo "<br>";echo "<br>";
		echo $vc[$v3[1]];
	}
	?>
	</h3>
	<center><input type="button"id='botoonenviar'name="salir" id='retornar' value='Regresar' onclick="regresar()"></center>
	</div>
	
</body>
</html>
	<style type="text/css">
		
		body{
			background: url(imagen.JPG) no-repeat center center fixed;
	 		background-size: cover;

		}
		#botoonenviar{
			color: lime;
			height: 50px;
			width: 300px;
			background-color: rgba(255, 255, 150, 0.8);
			border-radius: 5px;
			font-size: 30px;
		}
	</style>
	 

	  <script>
	  	function regresar(){
	  		location.href="index.php";
	  	}
	  </script>