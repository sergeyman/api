<?php
// used to connect to the database
$host = "127.0.0.1";
$db_name = "sv_api_php_crud_db_1";
$username = "root";
$password = "";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>