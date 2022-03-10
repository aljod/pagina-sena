<?php 
include('../conexion/conexion.php');
session_start();

  $id = $_POST['id'];
  $contraseña = $_POST['password'];

  if  (isset($_POST['id']) and isset($_POST['password'])) {
    $id = $_POST['id'];
    $contraseña = $_POST['password'];
    $query = "SELECT * FROM ingresos WHERE id='$id' and contraseña='$contraseña'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      header('location: dashboard.php');
      $_SESSION['id'] = true;
    }
    else{
        
         $_SESSION['message'] = 'Datos invalidos';
  $_SESSION['message_type'] = 'warning';
      header('location: login.php'); 
    
    }
  }
  else{
    echo 'llene los datos';
  }
?>