<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <title>Inicio de sesión</title>
</head>

<body>
      
  <form method="post" action="">
    <h2 class="">BIENVENIDO</h2>

    <?php
      include "model/connection.php";
      include "controller/LoginController.php";
    ?>

    <div class="">
        <div class="">
          <h5>Usuario</h5>
          <input id="user" type="text" class="" name="user">
        </div>
    </div>
    <div class="">
        <div class="div">
          <h5>Contraseña</h5>
          <input type="password" id="input" class="" name="password">
        </div>
    </div>
    <!-- <div class="view">
        <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
    </div> -->

    <div class="text-center">
        <a class="font-italic isai5" href="">Olvidé mi contraseña</a>
        <a class="font-italic isai5" href="">Registrarse</a>
    </div>
    <input name="btn_login" class="" type="submit" value="INICIAR SESION">
  </form>

</body>

</html>