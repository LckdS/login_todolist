<?php 

$sname = "127.0.0.1";
$unmae = "root";
$password = "123456";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
    echo "Conexion Fallida";
}