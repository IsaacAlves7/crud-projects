<?php
// Session
session_start();
// Connection
// Clients Register
require_once 'db_connect.php';
// Clear
function clear($input){ // No more scripts!
    global $connect;
    // sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}   

if(isset($_POST['btn-register'])):
    $nome = clear($_POST['nome']); // mysqli_escape_string is for SQL Injection Protection
    $lastname = clear($_POST['lastname']);
    $email = clear($_POST['email']);
    $age = clear($_POST['age']);
endif;

$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$lastname', '$email', '$age')";

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Registered successfully!";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "Registry error!";
    header('Location: ../index.php');
endif;
?>