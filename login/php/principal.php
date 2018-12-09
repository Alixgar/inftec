<?php
require_once("myDBC.php");
if(isset($_SESSION['session']))
{
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..:PAGINA PRINCIPAL:..</title>
</head>

<body bgcolor="#F5A9F2">
	<center><h2>BIENVENIDO</h2></center>
	<center> <div>
	<a href="Funciones.php"><img src="1.png"></a>
					  <p class="name"><a href="Funciones.php">sistemas computacionales</a></p>
						<p>&#9742 1111 - 1111</p>
				  </div></center>
				  <center> <img src="2.png">
                       <p class="name">
                         <a href="Funciones.php">ingenieria civil</a></p>
                       <p>&#9742 2222 - 2222</p>
                       </div>
					</center>
					<center>
					<img src="3.png">
					<p class="name">
                <a href="Funciones.php">ingenieria gestion</a></p>
							<p>&#9742 3333 - 3333</p>
						</div> 
						</center>
						<center>
					<img src="4.png">						
                	<p class="name"> 
                <a href="Funciones.php">ingenieria gestion</a></p>
							<p>&#9742 4444 - 4444</p>
						</div>
					</center>
	<a href="salir.php"><h4>CERRAR SESSION</h4></a>
</body>
</html>
<?php
}else
echo'<script type="text/javascript">
	  alert("Registrarse para ver este contenido");
	  window.location="http://localhost/infetec/login/index.php"
</script>';
?>
