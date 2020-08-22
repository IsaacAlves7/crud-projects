<?php
// Session
session_start();
// Connection
// Clients Register
require_once 'db_connect.php';

if(isset($_POST['btn-delete'])):

    $id = mysqli_escape_string($connect, $_POST['id']);
    $sql = "DELETE FROM clientes WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "The registry has been deleted successfully!";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "Delete error!";
    header('Location: ../index.php');
endif;
endif;
?>