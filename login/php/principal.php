<?php
require_once("myDBC.php");
  session_start();
  if(isset($_SESSION['session'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<body bgcolor="#FFC0CB">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
	<title>Pagina principal</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
	</head>
	<body>
	<?php
		echo $_SESSION['id']
		?>
		<center>
				<br><font face="Arial" size="+1" ><a href="salir.php"style="float:right" >Cerra Sesion</a></font></br>					
		<div class="wrapper">
			<div id="title">
			<center><h1>seleccione una imagen para conocer los departamentos </h1></center>
				<input id="search-box" type="text" name="search">
			</div>
			<div id="directory-cont"><ul id="directory">
						 <center> <div>              
				 <table>
					<tr>
						<td>
							<div></div>
						<div class="wrap">
						<div></div>
 
				 <center> <div>              
				 
                   <img src="ISC.jpg"></a>
					  <p class="name"><a href="Funciones.php">sistemas computacionales</a></p>
						<p>&#9742 1111 - 1111</p>
				  </div></center>
				  <td></td>
				  <td></td>
				</td>
				<td>        
				<center><div>  
					  <img src="IC.jpg">
                       <p class="name"><a href="Funciones.php">ingenieria civil</a></p>
                       <p>&#9742 2222 - 2222</p>
                       </div>
					</center>
					</td>
</tr>
<tr>
<td>
                 <div>
					<center>
				<img src="IGE.jpg">
					<p class="name"><a href="Funciones.php">ingenieria en gestion</a></p>
							<p>&#9742 3333 - 3333</p>
						</div> 
						</center>
						<td></td>
				  <td></td>			  					
							
</td>
<td>
	
					          <div>
					<center>
					<img src="II.jpg">						
                	<p class="name"><a href="Funciones.php">ingenieria industrial</a></p>
							<p>&#9742 4444 - 4444</p>
						</div>
					</center>
					</td>
</tr>
<tr>
<td>
                 <div>
					<center>
					<img src="IM.jpg">
					<p class="name"><a href="Funciones.php">ingenieria mecatronica</a></p>
							<p>&#9742 3333 - 3333</p>
						</div> 
						</center>
						<td></td>
				  <td></td>			  					
							
</td>
<td>
	
					          <div>
					<center>

					<img src="admin.png">						
                	<p class="name"><a href="Funciones.php">Administracion</a></p>
							<p>&#9742 4444 - 4444</p>
						</div>
					</center>
				</ul>
  </header>
  </div>				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="../js/jquery.liveFilter.js" type="text/javascript"></script>
		<script type="text/javascript">
			$('#directory').liveFilter('#search-box', 'td', { filterChildSelector: '.name'});
		</script>
	</body>	
</html>
<?php
