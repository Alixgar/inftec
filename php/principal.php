<?php
require_once("myDBC.php");
  session_start();
  if(isset($_SESSION['session'])){

?>
<!DOCTYPE html>
<head>
<title>..:PAGINA PRINCIPAL:..</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 </head>
<body bgcolor="#009966">
<font size="20" face ="Snap ITC" color="blue">
<marquee behavior =alternate>Bienvenido</marquee>
</font>
<br><font face="Arial" size="+1" color="#FFF6F2" ><a href="salir.php"style="float:right" >Cerra Sesion</a></font></br>
    <div><center><h2>Seleccione el departamento al que desea llegar</h2><center> </div>  
<map name="mapeo">
            <area alt="Si clicas aqui iras al mapa" shape="rect"  coords="48,317,369,389"  href="Funciones.php">
            <area  shape="rect" coords="470,272,569,305"  href="Funciones.php">
           <area  shape="rect" coords="230,270,329,303"  href="Funciones.php">
          <area  shape="rect" coords="229,121,331,156"href="Funciones.php"> 
          <area  shape="rect" coords="-2,121,92,154"  href="Funciones.php">
          <area  shape="rect" coords="-4,267,91,302"  href="Funciones.php">
          <area  shape="rect" coords="475,122,576,158"  href="Funciones.php">
         </map>
  <center><img src="HOLA.gif" usemap="#mapeo" ></center>
</body>
</html>
<?php
}else

echo'<script type="text/javascript">
	  alert("Registrarse para ver este contenido");
	  window.location="../index.php"
</script>';
?>