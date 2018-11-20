<?php

if ($_POST['send']) {
    $errores2 = '';
    $correct2 = '';
    $name = filter_var(strtolower($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
    $subject = filter_var(strtolower($_POST['subject']), FILTER_SANITIZE_STRING);
    $message = filter_var(strtolower($_POST['message']), FILTER_SANITIZE_STRING);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores2 .= '<li>Por favor ingresa un correo valido</li>';
        }

    if (empty($name) or empty($email) or empty($subject) or empty($message)) {
        $errores2 .= '<li>Por favor ingrese todos los datos correctos</li>';
    }else{
        echo "$name . $email . $subject . $message";
        try{
            $db = new PDO('mysql:host=localhost;dbname=users','root','Pass4now');
            }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            }
            $statement = $db->prepare('SELECT * FROM message WHERE email = :email LIMIT 1');
            $statement->execute(array(':email' => $email));
            $resultado = $statement->fetch();
            if($resultado != false){
            $errores2 .= '<li>El email ya se ha registrado</li>';
            }
        }
        if($errores2 == ''){
            $statement = $db->prepare('INSERT INTO message (id, name, email, subject, message) VALUES (null, :name, :email, :subject, :message)');
            $statement->execute(array(':name' => $name, ':email' => $email, ':subject' => $subject, ':message' => $message));
            $correct2 .= '<li>Tu mensaje se ha enviado correctamente, muchas gracias</li>';
            }
    }
    //try{
     //   $db = new PDO('mysql:host=localhost;dbname=users','root','Pass4now');
    //}catch(PDOException $e){
      //  echo "Error: " . $e->getMessage();
    //}
    //$statement = $db->prepare('INSERT INTO message (id, name, email, subject, message) VALUES (null, :name, :email, :subject, :message)');
    //$statement->execute(array(':name' => $name, ':email' => $email, ':subject' => $subject, ':message' => $message));

else if ($_POST['register']) {
    $email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
    echo "$email";
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
    if($resultado != false){
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