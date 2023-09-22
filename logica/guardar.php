<?php
if (isset($_POST['email'])) {
  require 'conexion.php';

  $email = $_POST['email'];
  
  $insertar = "INSERT INTO clientes VALUES ('$email')";
  
  $query = mysqli_query($conectar, $insertar);
    
    if($query) {
      echo "<script> alert('correcto');
      location.href = '../index.html'
       </script>";
  
    }else{
      echo "<script> alert('incorrecto'); 
      location.href = '../index.html'
      </script>";
    }
  
}

  



?>