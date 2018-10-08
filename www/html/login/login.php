<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$hash = hash('sha512', $password);

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=users', 'root', 'Pass4now');
	} catch (PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

	$statement = $conexion->prepare("SELECT * FROM loginform WHERE User = '$usuario' AND Pass = '$password'");
	$statement->execute(array(
		':usuario' => $usuario,
		':pass' => $hash
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else {
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

require 'views/login.view.php';

?>