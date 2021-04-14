<?php
session_start();

$nom= $_SESSION['txtUsuario'];
echo "<h4>Bienvenido:$nom</h4>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    
            <ul>
                <li><a href="#">Actividades</a></li>
                <li><a href="#">Enlaces</a></li>
                <li><a href="#">intranet</a></li>
           
            </ul>
    </nav>
    <a href="cerrar.php">Cerrar</a>;
</body>
</html>