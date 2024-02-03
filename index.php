<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<style type="text/css">
		input{
			padding: 2px;
		}
		form{
			background-color: rgba(182, 248, 238, 0.3);
			padding: 35px;
		}
		body{
			background: url(imagen.JPG) no-repeat center center fixed;
	 		background-size: cover;

		}
		h1{
			color:white;
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
	<h1 align="center">PREGUNTAS DE TEST VOCACIONAL</h1>
	<div style="padding: 3px;margin: 10px;">
		<form method="POST" action="respuesta.php">
			<h3>1.- Si pudieras tener una actividad extra durante las tardes, elegiría un curso de:</h3>
			a) <input type="radio" name="c1" value="a">Finanzas personales<br>
			b) <input type="radio" name="c1" value="b">Tecnología de los robots<br>
			c) <input type="radio" name="c1" value="c">Auxilios médicos<br>
			d) <input type="radio" name="c1" value="d">Reciclaje<br>
			e) <input type="radio" name="c1" value="e">Piano o guitarra<br><br>



			<h3>2.- Mi asignatura escolar favorita es:</h3> 
			a)<input  id="rd1" name="c2" type="radio" value="a" required> Español, geografía, ciencias sociales</input><br>
			b)<input  id="rd2" name="c2" type="radio" value="b"> Física y matemáticas</input><br>
			c)<input  id="rd1" name="c2" type="radio" value="c"> Filosofía, historia o ética</input><br>
			d)<input  id="rd2" name="c2" type="radio" value="d"> Biología y química</input><br>
			e)<input  id="rd1" name="c2" type="radio" value="e"> Actividades artísticas</input><br>
			<br>


			<h3>3.- Le tengo admiración a:</h3>
			a)<input  id="rd1" name="c3" type="radio" value="a" required> Los emprendedores convertidos en grandes empresarios</input><br>
			b)<input  id="rd2" name="c3" type="radio" value="b"> Los fundadores de redes para comunicaciones digitales</input><br>
			c)<input  id="rd1" name="c3" type="radio" value="c"> Enfermeras y doctores</input><br>
			d)<input  id="rd2" name="c3" type="radio" value="d"> Los creadores de nuevos medicamentos</input><br>
			e)<input  id="rd1" name="c3" type="radio" value="e"> Artistas en diversas gamas (actrices, cantantes, etc.)</input><br>
			<br>


			<h3>4.- Si fuera auxiliar de alguna persona, sería:</h3>
			a)<input  id="rd1" name="c4" type="radio" value="a" required> Político</input><br>
			b)<input  id="rd2" name="c4" type="radio" value="b"> Ingeniero o arquitecto</input><br>
			c)<input  id="rd1" name="c4" type="radio" value="c"> Maestro</input><br>
			d)<input  id="rd2" name="c4" type="radio" value="d"> Científico marino</input><br>
			e)<input  id="rd1" name="c4" type="radio" value="e"> Dibujante</input><br>
			<br>


			<h3>5.- Si estoy viendo la televisión, me gustan los programas de:</h3>
			a)<input  id="rd1" name="c5" type="radio" value="a"required> Noticias actuales sobre economía y política</input><br>
			b)<input  id="rd2" name="c5" type="radio" value="b"> Avances tecnológicos recientes</input><br>
			c)<input  id="rd1" name="c5" type="radio" value="c"> Problemáticas de personas para darles solución</input><br>
			d)<input  id="rd2" name="c5" type="radio" value="d"> Documentales sobre plantas y animales</input><br>
			e)<input  id="rd1" name="c5" type="radio" value="e"> Caricaturas y videos</input><br>
			<br>


			<h3>6.- Laborando en un futuro, me visualizo:</h3>
			a)<input  id="rd1" name="c6" type="radio" value="a"required> Laborando con fórmulas y cantidades numéricas</input><br>
			b)<input  id="rd2" name="c6" type="radio" value="b"> Laborando con maquinaria y diversos materiales</input><br>
			c)<input  id="rd1" name="c6" type="radio" value="c"> Laborando con personas</input><br>
			d)<input  id="rd2" name="c6" type="radio" value="d"> Laborando con pequeños organismos y diversas sustancias</input><br>
			e)<input  id="rd1" name="c6" type="radio" value="e"> Laborando con pinturas e instrumentos musicales
			</input><br>
			<br>


			<h3>7.- Alguien que podría tener mi admiración y respeto sería alguien que:</h3>
			a)<input  id="rd1" name="c7" type="radio" value="a"required> Es encargado de la logística que un equipo va a llevar a cabo</input><br>
			b)<input  id="rd2" name="c7" type="radio" value="b"> Es creador de un producto que sea de utilidad para la vida cotidiana</input><br>
			c)<input  id="rd1" name="c7" type="radio" value="c"> Es una persona que ofrece su tiempo para ayudar y servir a otros</input><br>
			d)<input  id="rd2" name="c7" type="radio" value="d"> Es capaz de estudiar a los seres vivos y su naturaleza</input><br>
			e)<input  id="rd1" name="c7" type="radio" value="e"> Es creador de obras musicales y artísticas que inspiran su entorno.</input><br>
			<br>


			<h3>8.- Si llego a tener un evento, mis tareas a realizar son:</h3>
			a)<input  id="rd1" name="c8" type="radio" value="a"required> Dirigiendo al personal, cotizando presupuestos y recabando el dinero</input><br>
			b)<input  id="rd2" name="c8" type="radio" value="b"> Revisando el funcionamiento adecuado del equipo de sonido</input><br>
			c)<input  id="rd1" name="c8" type="radio" value="c"> Atendiendo a los invitados del evento</input><br>
			d)<input  id="rd2" name="c8" type="radio" value="d"> Hacer un estudio de las instalaciones para su uso y limpieza adecuada</input><br>
			e)<input  id="rd1" name="c8" type="radio" value="e"> Preparar el diseño ambiental del lugar del evento y el diseño de las propagandas</input><br>
			<br>



			<h3>9.- Si se iniciara un nuevo negocio, mi aportación sería:</h3>
			a)<input  id="rd1" name="c9" type="radio" value="a"required> Llevar a cabo la contabilidad</input><br>
			b)<input  id="rd2" name="c9" type="radio" value="b"> Llevar la supervisión de las tecnologías que se requieren</input><br>
			c)<input  id="rd1" name="c9" type="radio" value="c"> Darles una cálida bienvenida a los clientes</input><br>
			d)<input  id="rd2" name="c9" type="radio" value="d"> Revisar que la calidad de los alimentos sea excelente</input><br>
			e)<input  id="rd1" name="c9" type="radio" value="e"> Llevar a cabo el diseño ambiental y la imagen tanto interna como externa del local</input><br>
			<br>

			<h3>10.- Si leo un libro o una revista, trata de:</h3>
			a)<input  id="rd1" name="c10" type="radio" value="a" required> Política, derecho y economía</input><br>
			b)<input  id="rd2" name="c10" type="radio" value="b"> Herramientas, instrumentos y tecnología</input><br>
			c)<input  id="rd1" name="c10" type="radio" value="c"> Sociología, humanidades y psicología</input><br>
			d)<input  id="rd2" name="c10" type="radio" value="d"> Funciones del cuerpo y cerebro humano</input><br>
			e)<input  id="rd1" name="c10" type="radio" value="e"> Danza, diseño, pintura, escultura</input><br>
			<br>
			<h3>11.- Si laborara para una gran empresa, me sería grato el departamento de:</h3>
			a)<input  id="rd1" name="c11" type="radio" value="a" required>Administración y contabilidad</input><br>
			b)<input  id="rd2" name="c11" type="radio" value="b">Investigaciones</input><br>
			c)<input  id="rd1" name="c11" type="radio" value="c">Recursos humanos</input><br>
			d)<input  id="rd2" name="c11" type="radio" value="d">Higiene y salud</input><br>
			e)<input  id="rd1" name="c11" type="radio" value="e">Diseño ambiental y de muebles</input><br>


			<h3>12.- Si tuviera una plática interesante sería con:</h3>
			a)<input  id="rd1" name="c12" type="radio" value="a" required>El presidente</input><br>
			b)<input  id="rd2" name="c12" type="radio" value="b">Ingeniero de un edificio inteligente</input><br>
			c)<input  id="rd1" name="c12" type="radio" value="c">Reportero de noticias</input><br>
			d)<input  id="rd2" name="c12" type="radio" value="d">Médico de un hospital que se encuentra en urgencias</input><br>
			e)<input  id="rd1" name="c12" type="radio" value="e">Fotógrafo de una revista</input><br>

			<h3>13.- Si alguien visitara mi habitación encontraría:</h3>
			a)<input  id="rd1" name="c13" type="radio" value="a" required>Cosas que he comprado con mis ingresos</input><br>
			b)<input  id="rd2" name="c13" type="radio" value="b">Aparatos electrónicos y de alta tecnología</input><br>
			c)<input  id="rd1" name="c13" type="radio" value="c">Recuerdos que tienen gran valor sentimental</input><br>
			d)<input  id="rd2" name="c13" type="radio" value="d">Un pez, una planta y algunos suvenires de lugares que he visitado</input><br>
			e)<input  id="rd1" name="c13" type="radio" value="e">Fotografías, cuadros y carteles con imágenes llamativas</input><br>

			<h3>14.- Cuando voy a una exposición, la que me llama la atención trata de:</h3>
			a)<input  id="rd1" name="c14" type="radio" value="a" required>Debates políticos y economía</input><br>
			b)<input  id="rd2" name="c14" type="radio" value="b">Alta tecnología e inventos científicos innovadores</input><br>
			c)<input  id="rd1" name="c14" type="radio" value="c">Metodologías educativas, librerías y centros de idiomas</input><br>
			d)<input  id="rd2" name="c14" type="radio" value="d">Fauna y flora de animales exóticos y desconocidos</input><br>
			e)<input  id="rd1" name="c14" type="radio" value="e">Artes, música y pintura</input><br>

			<h3>15.- Me sentiría plano y feliz si pudiera:</h3>
			a)<input  id="rd1" name="c15" type="radio" value="a" required>Emprender un negocio que haga altos niveles de ganancias</input><br>
			b)<input  id="rd2" name="c15" type="radio" value="b">Formar parte del equipo que emprenda una construcción moderna</input><br>
			c)<input  id="rd1" name="c15" type="radio" value="c">Descubrir la cura para padecimientos y enfermedades de nuestra actualidad</input><br>
			d)<input  id="rd2" name="c15" type="radio" value="d">Ser el creador de nuevas especies tanto de animales como de plantas</input><br>
			e)<input  id="rd1" name="c15" type="radio" value="e">Ser un bailarín profesional y un gran artista</input><br>

			<h3>16.- Si fuera de visita a algún lugar sería:</h3>
			a)<input  id="rd1" name="c16" type="radio" value="a" required>La casa de bolsa</input><br>
			b)<input  id="rd2" name="c16" type="radio" value="b">Una planta automotriz</input><br>
			c)<input  id="rd1" name="c16" type="radio" value="c">Una institución de educación especial</input><br>
			d)<input  id="rd2" name="c16" type="radio" value="d">Una gran laboratorio de experimentos para vacunas</input><br>
			e)<input  id="rd1" name="c16" type="radio" value="e">Un estudio de grabación y video</input><br>

			<h3>17.- Si hablo de algún tema, hablaría de:</h3>
			a)<input  id="rd1" name="c17" type="radio" value="a" required>Economía en el país</input><br>
			b)<input  id="rd2" name="c17" type="radio" value="b">Altas tecnologías</input><br>
			c)<input  id="rd1" name="c17" type="radio" value="c">Tipos de terapias psicológicas</input><br>
			d)<input  id="rd2" name="c17" type="radio" value="d">Nuevos descubrimientos del ADN</input><br>
			e)<input  id="rd1" name="c17" type="radio" value="e">Afinidad por la música y el arte</input><br>

			<h3>18.- En mi tiempo libre me gusta:</h3>
			a)<input  id="rd1" name="c18" type="radio" value="a" required>Crear reuniones o eventos</input><br>
			b)<input  id="rd2" name="c18" type="radio" value="b">Conocer sobre algún tipo de software nuevo</input><br>
			c)<input  id="rd1" name="c18" type="radio" value="c">Ayudar a que terminen pronto su tarea mis sobrinos o hermanos pequeños</input><br>
			d)<input  id="rd2" name="c18" type="radio" value="d">Ir de visita a algún zoológico o jardín</input><br>
			e)<input  id="rd1" name="c18" type="radio" value="e">Tocar algún instrumento o practicar alguna danza</input><br>
			
			<h3>19.- Si fuera reconocido sería por:</h3>
			a)<input  id="rd1" name="c19" type="radio" value="a" required>Mi capacidad para concluir negocios</input><br>
			b)<input  id="rd2" name="c19" type="radio" value="b">Mis aportaciones a la tecnología</input><br>
			c)<input  id="rd1" name="c19" type="radio" value="c">Implementar un programa que mejore la calidad de vida de la gente de pocos recursos</input><br>
			d)<input  id="rd2" name="c19" type="radio" value="d">Mis descubrimientos médicos</input><br>
			e)<input  id="rd1" name="c19" type="radio" value="e">Mis obras musicales o esculturas</input><br>

			<h3>20.- Si me imagino algo, es sobre:</h3>
			a)<input  id="rd1" name="c20" type="radio" value="a" required>Cómo hacer dinero</input><br>
			b)<input  id="rd2" name="c20" type="radio" value="b">Cómo son las casas del 2040</input><br>
			c)<input  id="rd1" name="c20" type="radio" value="c">Cómo ayudar a resolver problemas personales</input><br>
			d)<input  id="rd2" name="c20" type="radio" value="d">Cómo podría hacer un viaje de campamento</input><br>
			e)<input  id="rd1" name="c20" type="radio" value="e">Cómo hacer animaciones digitales y de video</input><br>

			<h3>21.- Sentiría orgullo si fuera un:</h3>
			a)<input  id="rd1" name="c21" type="radio" value="a" required>Político modelo</input><br>
			b)<input  id="rd2" name="c21" type="radio" value="b">Gran arquitecto</input><br>
			c)<input  id="rd1" name="c21" type="radio" value="c">Benefactor reconocido</input><br>
			d)<input  id="rd2" name="c21" type="radio" value="d">Científico renombrado</input><br>
			e)<input  id="rd1" name="c21" type="radio" value="e">Artista famoso</input><br>

			<h3>22.- Si trabajara medio tiempo, trabajaría en:</h3>
			a)<input  id="rd1" name="c22" type="radio" value="a" required>Un despacho</input><br>
			b)<input  id="rd2" name="c22" type="radio" value="b">Una fábrica</input><br>
			c)<input  id="rd1" name="c22" type="radio" value="c">Un colegio</input><br>
			d)<input  id="rd2" name="c22" type="radio" value="d">En las montañas</input><br>
			e)<input  id="rd1" name="c22" type="radio" value="e">En el teatro</input><br>
			
			<h3>23.- Si aprendo algo nuevo, lo recuerdo:</h3>
			a)<input  id="rd1" name="c23" type="radio" value="a" required>Si lo organizo con gráficas y esquemas</input><br>
			b)<input  id="rd2" name="c23" type="radio" value="b">Si trato de tocar objetos</input><br>
			c)<input  id="rd1" name="c23" type="radio" value="c">Si hablo respecto al tema con varias personas</input><br>
			d)<input  id="rd2" name="c23" type="radio" value="d">Si realizo un análisis profundo de toda la información</input><br>
			e)<input  id="rd1" name="c23" type="radio" value="e">Si utilizo sonidos y movimientos</input><br>

			<h3>24.- Casi siempre estoy:</h3>
			a)<input  id="rd1" name="c24" type="radio" value="a" required>Organizando las reuniones y fiestas</input><br>
			b)<input  id="rd2" name="c24" type="radio" value="b">Reparando algún aparato electrónico</input><br>
			c)<input  id="rd1" name="c24" type="radio" value="c">Ayudando a la gente a que resuelvan situaciones personales</input><br>
			d)<input  id="rd2" name="c24" type="radio" value="d">Procurando el bienestar de un animal o una planta</input><br>
			e)<input  id="rd1" name="c24" type="radio" value="e">Pintando, haciendo dibujitos, tocando algún instrumento</input><br>
			
			<h3>25.- Tengo una gran inclinación a:</h3>
			a)<input  id="rd1" name="c25" type="radio" value="a" required>Ser responsable de las cuestiones financieras</input><br>
			b)<input  id="rd2" name="c25" type="radio" value="b">Conocer de la diversidad de la vegetación que crece en mi escuela</input><br>
			c)<input  id="rd1" name="c25" type="radio" value="c">Resolver algunas problemáticas personales o familiares</input><br>
			d)<input  id="rd2" name="c25" type="radio" value="d">Conocer enfermedades comunes</input><br>
			e)<input  id="rd1" name="c25" type="radio" value="e">Ser planificador de conciertos o eventos</input><br>
			<center><input type="submit"id='botoonenviar'name="enviar" value='Verificar'></center>
		</form>
	</div>

</body>
</html>