<?php
// Database connection
// Database = crud
// Table = clientes
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name); // mysqli for Procedural PHP
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Warning: Connect error!: ".mysqli_connect_error();
endif;
?>