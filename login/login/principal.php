<?php 

session_start();

if( empty( $_SESSION["id"] ) ) {
  header("location: index.php");
}

?>

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
      
  <h1>Bienvenido</h1>

  <a href="controller/LogoutController.php">Salir</a>

  <?php 
    echo $_SESSION["name"]." ". $_SESSION["last_name"];
  ?>

</body>

</html>