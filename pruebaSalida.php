<?php

include_once "connection.php";


// if( !empty($_POST["btn_show"]) ) 
// {
//     $text1 = $_POST["text1"];
//     $text2 = $_POST["text2"];

//     $sql = $connection->query("select * from 
//                               prueba(text1,text2)
//                               values('$text1','$text2')");

    



// }




// if ( !empty( $_POST["btn_show"] ) ) {

//     if( !empty( $_POST["text1"] ) and !empty( $_POST["text2"] ) ) {
//       = $text1 = $_POST["text1"];
//       $text2 = $_POST["text2"];
  
//       $sql = $connection->query(" select * from prueba where text1='$text1' and text2='$text2' ");
  
//       if( $datos = $sql->fetch_object() ){
//         $_SESSION["text1"] = $prueba->text1;
//         $_SESSION["text2"] = $prueba->text2;

//         // echo $text2;
  
//         // header("location: principal.php");
//       } else {
//         echo "<div>Acceso denegado</div>";
//       }
  
//   }
// }


// Consulta SQL
$sql = "SELECT * FROM prueba";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Iterar sobre los resultados y mostrar los datos
    while ($row = $result->fetch_assoc()) {
        echo "texto1: " . $row["texto1"] . " - texto2: " . $row["texto2"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

?>