<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "vendas";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die ("<script> alert('Falha na conexão')</script>");

}
?>