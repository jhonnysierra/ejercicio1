<?php
	require('operacion.php');
?>
<html>
	
	<form name="operaciones" method="post" action="ejercicio1.php">
		<table align="center" border="0">
			<tr>
				<td>Numero 1<input type="text" name="txt1" value="" size="20" maxlength="3"></td>
				<td><input type="radio" name="rope" value="amigos" checked="checked">Amigos</td>
			</tr>
			<tr>
				<td>Numero 2<input type="text" name="txt2" value="" size="20" maxlength="3"></td>
				<td><input type="radio" name="rope" value="mayor">Mayor</input></td>
			</tr>
			<tr>	
				<td>Numero 3<input type="text" name="txt3" value="" size="20" maxlength="3"></td>
				<td><input type="radio" name="rope" value="menor">Menor</input></td>
			</tr>
			<tr>	
				<td>Resultado<input type="text" name="txt4" value="<?php echo $res; ?>" size="20" maxlength="3"></td>
			</tr>			
			<tr>	
				<td><input type="submit" name="btncalcular" value="calcular"></input></td>
			</tr>			
		</table>
	</form>

</html>