<?php
// Session
session_start();
// Connection
// Clients Register
require_once 'db_connect.php';

if(isset($_POST['btn-edit'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $lastname = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['idade']);

    $id = mysqli_escape_string($connect, $_POST['id']);


$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$lastname', email = '$email', idade = '$age' WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "The registry has been updated successfully!";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "Update error!";
    header('Location: ../index.php');
endif;
endif;
?>