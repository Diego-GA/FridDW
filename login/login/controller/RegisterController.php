<?php 

if( !empty($_POST["btn_register"]) ) {

  if( empty( $_POST["name"] ) or 
      empty( $_POST["last_name"] ) or 
      empty( $_POST["user_name"] ) or 
      empty( $_POST["password"] ) ) {

        echo "Uno de los campos estan vacios";

  } else {

    $name =      $_POST["name"];
    $last_name = $_POST["last_name"];
    $user_name = $_POST["user_name"];
    $password =  $_POST["password"];

    $sql = $connection->query("insert into 
                              users(name,last_name,user_name,password)
                              values('$name','$last_name','$user_name','$password')");
  }

}

?>