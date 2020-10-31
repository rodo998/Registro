<!DOCTYPE html>
<html>
<head>
	<title>Registrar Directorio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Sistema de Registro Rodolfo Cervantes</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="tel" name="phone" placeholder="ej 8441232312">
    	<input type="submit" name="register" value="Registrar">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>
