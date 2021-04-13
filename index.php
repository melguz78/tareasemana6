<?php

session_start();

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

        <div style="width: 390px; background-color: cyan; "   class="form-group;">
                        <h4>LOGIN</h4> <br><hr>
                    <form action="usuario.php" method="POST" class="form-control">

                    <label for="Usuario ">Usuario</label><br>
                    <input type="text" name="Usuario" class="form-control" placeholder="Nombre de usuario"><br><br>
                    <label for="Contraseña">Contraseña</label><br>
                    <input type="password" name="Password" class="form-control" placeholder="contraseña"><br><br>
                    <input type="submit" value="Enviar" class="btn btn-danger">
                    </form>
        </div>
  </body>
  </html>
 <?php

        if(isset($_POST['user']) and isset($_POST['Password'])){

            $_REQUEST['elusuario']=$_REQUEST['user'];
        }


 ?>
