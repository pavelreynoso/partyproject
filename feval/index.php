<?php session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
  
  $errores = '';
  $correct = '';

  if(empty($email)){
    $errores .= '<li>Por favor ingresa un email correcto</li>';
  }else {
    try{
      $db = new PDO('mysql:host=localhost;dbname=users','root','Pass4now');
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    $statement = $db->prepare('SELECT * FROM usuarios WHERE email = :email LIMIT 1');
    $statement->execute(array(':email' => $email));
    $resultado = $statement->fetch();

    if($resultado !=  false){
      $errores .= '<li>El email ya se ha registrado</li>';
    }
  }
  if($errores == ''){
    $statement = $db->prepare('INSERT INTO usuarios (id, email) VALUES (null, :email)');
    $statement->execute(array(':email' => $email));
    $correct .= '<li>Te has registrado correctamente, muchas gracias</li>';
  }
}

if (isset($SESSION['submit'])) {
  $nombre = $_POST['nombre'];
  $asunto = $_POST['asunto'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];
  if (!empty($nombre)) {
      $nombre = trim($nombre);
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  }else {
      $errores .= 'Por favor ingresa un nombre <br />';
  }

  if (!empty($asunto)) {
      $asunto = trim($asunto);
      $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
  }else {
      $errores .= 'Por favor ingresa un asunto <br />';
  }

  if (!empty($correo)) {
      $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
         $errores .= 'Por favor ingresa un correo valido <br />';
      }
  }else {
      $errores .= 'Por favor ingresa un correo <br />';
  }

  if (!empty($mensaje)) {
      $mensaje = htmlspecialchars($mensaje);
      $mensaje = trim($mensaje);
      $mensaje = stripslashes($mensaje);
  }else {
      $errores .= 'Por favor ingresa el mensaje <br />';
  }

  if(!$errores) {
      $enviar_a = 'pavelito200@hotmail.com';
      $mensaje_l = "$asunto";
      $mensaje_l = "De: $nombre \n";
      $mensaje_l = "Correo: $correo \n";
      $mensaje_l = "Mensaje: " . $mensaje;

      mail($enviar_a, $mensaje_l);
  }
}

require 'views/index.view.php';
?>
