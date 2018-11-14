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
require 'views/index.view.php';
?>