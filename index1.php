<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>inicio</title>
    <style type="text/css">
<!--
.Estilo1 {font-size: 36px}
.Estilo2 {color: #FFFFFF}
-->
    </style>
</head>
<body background="images/22.jpg" style="background-attachment: fixed" >
<center><div class="tit">
	  <form action="" method="post" name="form1" class="Estilo1">
        <div align="left" class="accordion">
          <p>&nbsp;</p>
          <p class="Estilo2">EQUIPO 5 </p>
        </div>
  </form>
	  <h2 style="color: #0000FF; ">Inicio de sesión</h2>
  <center><div class="Ingreso">
    <table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b><span class="Estilo2">Nombre de Usuario</span>: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr>
		  <td><span style="color: #FFFFFF">
		    <label style="font-size: 14pt"><b>Contraseña: </b></label>
		    </span></td>
		  <td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend class="Estilo2"  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group"> <span style="color: #FFFFFF">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      </span>
  <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu nombre de usuario</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa nombre de usuario"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group"> <span style="color: #FFFFFF">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      </span>
  <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div></div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
	</table>
  </center></center>

	
    </body>
</html>