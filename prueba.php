<?php 
include "connection.php";

if( !empty($_POST["btn_text"]) ) 
{
  if( empty( $_POST["text1"] ) or 
      empty( $_POST["text2"] ) ) 
    {
        echo "Uno de los campos estan vacios";
    }
    else 
    {

    $text1 =      $_POST["text1"];
    $text2 = $_POST["text2"];

    $sql = $connection->query("insert into 
                              prueba(text1,text2)
                              values('$text1','$text2')");
  }

}
?>