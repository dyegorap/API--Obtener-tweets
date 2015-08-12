<!DOCTYPE html>
<head>
	<link href="Estilos.css" rel="stylesheet"/>

<script language="javascript">

function validarNro(e) {

var key;

if(window.event) // IE

{

key = e.keyCode;

}

else if(e.which) // Netscape/Firefox/Opera

{

key = e.which;

}

if (key < 48 || key > 57)

{

if(key == 46 || key == 8 ) // Detectar . (punto) y backspace (retroceso)

    { return true; }
else 
    { return false; }

}

return true;

}

</script>

</head>
<body class="cuerpo">
	<form name="formulario" method="post" action="tweets.php">
<center><table class="tablee">
<tr><td>Ingresa el usuario: <input type="text" name="usuario" value="" class="campo" required="required"></td></tr>
<tr><td>Ingresa el numero de tweets: <input type="numeric" name="tuits" value="" class="campo" required="required" onkeypress="javascript:return validarNro(event)"></td></tr>
<td colspan="2"><center><input type="submit" value="Buscar" class="boton"/></center></td>
</table></center>
</form>
</body>
</html>
