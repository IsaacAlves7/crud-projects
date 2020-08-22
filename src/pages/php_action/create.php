<?php
// Session
session_start();
// Connection
// Clients Register
require_once 'db_connect.php';

if(isset($_POST['btn-register'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);
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