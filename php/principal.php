<?php
require_once("myDBC.php");
if(isset($_SESSION['session']))
{
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..:PAGINA PRINCIPAL:..</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
<body bgcolor="#009966">
<font size="20" face ="Snap ITC" color="blue">
<marquee behavior =alternate>Bienvenido</marquee>
</font>
<br><font face="Arial" size="+1" color="#FFF6F2" ><a href="salir.php"style="float:right" >Cerra Sesion</a></font></br>
    <div><center><h2>Seleccione el departamento al que desea llegar</h2><center> </div>  
	<a href="salir.php"><h4>CERRAR SESSION</h4></a>
</body>
</html>
<?php
}else
echo'<script type="text/javascript">
	  alert("Registrarse para ver este contenido");
	  window.location="http://localhost/login/index.php"
</script>';
?>
