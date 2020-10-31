<?php 

include("con_db.php");

if($conex){
	echo "¡Conexion con la base de datos esablecida!"
}

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$phone = trim($_POST['phone'])
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO directorio.personas(nombre, email, telefono, fecha_registro) VALUES ('$name','$email','$phone','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Registrado Correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Flatan campos por llenar!</h3>
           <?php
    }
}

?>
