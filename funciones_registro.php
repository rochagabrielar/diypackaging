<?php
require_once 'conexion.php';
// Inicio la sesión para tener acceso a $_SESSION en todos los archivos
	session_start();

  // Definimos las constantes que necesitamos en nuestro proyecto
  	define('ALLOWED_IMAGE_FORMATS', ['jpg', 'jpeg', 'png', 'gif']);

	// Si está la cookie almacenada y si NO está logueda la persona:
	if ( isset($_COOKIE['userLoged']) && !isLogged() ) {
		// Busco al usuario por el email que tengo almacenado en la cookie
		$theUser = getUserByEmail($_COOKIE['userLoged']);
		// Guardo en sesión al usuario que bisqué anteiormente
		$_SESSION['userLoged'] = $theUser;
	}



// *********************** Empieza función Validar******
// ESTA FUNCIÓN VALIDA QUE EL FORMUL$_POST['pais'] ARIO NO TENGA ERRORES
// Recibe un parámetro ($data). Al ejecutarla en nuestro código, le enviaremos $_POST para que valida la información que llegó a través del formulario

function validar($data) {



  //Crea un array de errores vacío.
  $errores = [];

  //Validando campo Nombre

  // trim() es una función de PHP - elimina los espacios en blanco al inicio y final del string
  $nombre = trim($data['nombre']);

  // Si nombre no está vacio Entonces no tiene errores y sigo. Si está vacío almaceno un error
  if($nombre == "") {
    //si existen errores en el campo del nombre, almaceno ese error en la posición "nombre" de mi array de errores
    $errores['nombre'] = "El nombre es obligatorio";
  }

  //Validando campo username

  // trim() es una función de PHP - elimina los espacios en blanco al inicio y final del string
  $username = trim($data['username']);

  // Si username no está vacio Entonces no tiene errores y sigo. Si está vacío almaceno un error
  if($username == "") {
    //si existen errores en el campo del nombre, almaceno ese error en la posición "nombre" de mi array de errores
    $errores['username'] = "El nombre de usuario es obligatorio";
  }
  // strlen() es una función de PHP - cuenta el número de caracteres (string length)
  elseif(strlen($username) < 4) {
    $errores['username'] = "El nombre de usuario debe tener al menos 5 caracteres";
  }

  elseif ( usernameExiste($username) ) { // Si el email ya existe, es porque alguien ya se registró con el mismo
			$errores['username'] = 'Este usuario ya está registrado';
		}


  //Validando campo Email

  // trim() es una función de PHP - elimina los espacios en blanco al inicio y final del string
  $email = trim($data['email']);
  // filter_var() es otra función de PHP para chequear que el texto tenga cierto, formato , en este caso formato de email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  // Si email no está vacio entonces , valido que tenga el formato email en el elseif
  if($email == ""){
    //si existen errores en el campo del email, almaceno ese error en la posición "email" de mi array de errores
    $errores['email'] = "El mail es obligatorio";
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores['email'] = "El email ingresado no es válido";
  } elseif ( emailExiste($email) ) { // Si el email ya existe, es porque alguien ya se registró con el mismo
			$errores['email'] = 'Ese correo ya está registrado';
		}

  //Validando campo PASSWORD

  // trim() es una función de PHP - elimina los espacios en blanco al inicio y final del string
  $password = trim($data['password']);

  if($password == "" ) {
    //si existen errores en el campo del password, almaceno ese error en la posición "password" de mi array de errores
    $errores['password'] = "La contraseña es obligatoria";
  }
  // strlen() es una función de PHP - cuenta el número de caracteres (string length)
  elseif (strlen($password) < 6) {
    $errores['password'] = "La contraseña debe tener al menos 6 caracteres";
  }
  // strpos() es una función de PHP - se fija si en un string, se encuentra contenido un segundo string. En recibe dos parametros: El string
  // donde vamos a buscar el texto ( en este caso la $password) y el string que queremos buscar (en este caso DH en mayuscula)
  elseif ( count(explode('DH', $password)) == 1) {
    $errores['password'] = "La contraseña debe contener el texto DH";
  }

  //Validando CONFIRMACION DEPASSWORD

  // trim() es una función de PHP - elimina los espacios en blanco al inicio y final del string
  $confirmPassword = trim($data['confirmPassword']);

  if($confirmPassword == "") {
    //si existen errores en el campo del confirm-password, almaceno ese error en la posición "confirmPassword" de mi array de errores
    $errores['confirmPassword'] = "Debe repetir la contraseña para continuar";
  } elseif($password != $confirmPassword) {
    $errores['confirmPassword'] = "Las contraseñas no coinciden";
  }

  // trim() es una función de PHP - elimina los espacios en blanco al inicio y final del string
  $pais = trim($data['pais']);

  if($pais == "") {
    //si existen errores en el campo del confirm-password, almaceno ese error en la posición "confirmPassword" de mi array de errores
    $errores['pais'] = "Debe ingresar un pais";
  }

  // Validando imagen
  $avatar = $_FILES['avatar'];
  if ( $avatar['error'] != UPLOAD_ERR_OK )
  {
			$errores['avatar'] = 'Subí una imagen';
		} else {
			$ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
			if ( !in_array($ext, ALLOWED_IMAGE_FORMATS) ) {
				$errores['avatar'] = 'Los formatos permitidos son JPG, PNG y GIF';
			}
		}


  return $errores;
}

// *********************** Termina función Validar******

// *********************** Empieza función GuardarUsuario******
// Esta hace RETURN de un usuario (osea, devuelve un usuario) , a partir de la información que se le pasa por el parámetro ($data)
// En nuestro caso le mandamos lo que tenemos en $_POST + el $usersArray para saber cuantos usuarios tenemos, y calcular dinamicamente el ID único de cada usuario.

function guardarUsuario() {
	global $conexion;

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = password_hash($_POST["password"],PASSWORD_DEFAULT);
	$pais = $_POST['pais'];
	$avatar = $_POST['avatar'];

	try {
		$consulta = $conexion->prepare("INSERT INTO users values (default, ?, ?, ?, ?, ?, ?)");
		$consulta->execute([$nombre, $username, $password, $pais, $avatar,  $email]);
	} catch(PDOException $error) {
		die('Error de base de datos');
	}
}


// *********************** Termina función GuardarUsuario******

// Función para guardar la imagen
	/*
		No le pasamos parámetros, $_FILES es una variable global
	*/
	function guardarImagen() {

    $rutaImagenes = 'avatars/';
		// Obtengo la extensión del archivo
		$extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
		// Obtengo el archivo temporal
		$archivoTemporal = $_FILES['avatar']['tmp_name'];
		// Armo el nombre de la imagen
		$nombreArchivo = uniqid('img_') . '.' . $extension;
		// Destino final (NO OLVIDAR DAR LOS PERMISOS A LA CARPETA EN NUESTRO D.D.)
		$rutaFinal = $rutaImagenes . $nombreArchivo;
		// Guardamos la imagen en nuestra carpeta
		move_uploaded_file($archivoTemporal, $rutaFinal);
		// Retorno el nombre de la imagen para poder guardar el mismo en el JSON
		return $nombreArchivo;
	}

	function emailExiste($email) {
		global $conexion;
		// La query que hay que hacer
		$sql = 'SELECT * FROM users WHERE email='.$email;
		// // Preparo la query para ejecutarla
		$consulta = $conexion->prepare("SELECT * FROM users WHERE email=?");
		$user = $consulta->execute([$email]);
		if($user) {
			return true;
		}
		return false;
	}

  function usernameExiste($username) {
		global $conexion;
		// La query que hay que hacer
		$sql = 'SELECT * FROM users WHERE username='.$username;
		// // Preparo la query para ejecutarla
		$consulta = $conexion->prepare("SELECT * FROM users WHERE username=?");
		$user = $consulta->execute([$username]);
		if($user) {
			return true;
		}
		return false;
  }

  // Función traer todo del JSON
	function traerUsuariosDeSql() {
		global $conexion;
	  // La query que hay que hacer
	  $sql = 'SELECT *
	          FROM users';
	 // // Preparo la query para ejecutarla
	 $consulta = $conexion->query($sql);
	 $allUsers = $consulta->fetchAll();

	 return $allUsers;
	}

  // Función para generar un ID
function generarIdDeUsuario() {
  // Traigo a todos los usuarios
  $todosLosUsuarios = traerUsuariosDeSql();
  // Si el conteo del array de usuarios es igual a cero
  if ( count($todosLosUsuarios) == 0 ) {
    return 1;
  }
  // Si el conteo del array de usuarios es superior a cero, obtengo el último usuario registrado
  $ultimoUsuario = array_pop($todosLosUsuarios);
  // Retorno el ID del último usuario registrado + 1
  return $ultimoUsuario['id'] + 1;
}




// Función para loguear al usuario
	/*
		Recibe como parámetro un array que contenga la información del usuario.
	*/
	function login($user) {
		// Del usuario que recibo saco la posición "password" pues no me interesa tenerla en sesión
		unset($user['password']);
		// Guardo en sesión al usuario que recibo por parámetro
		$_SESSION['userLoged'] = $user;
		// Redirecciono al perfil del usuario
		header('location: perfil.php');
		exit; // Siempre, después de una redirección se recomienda hacer un exit.
	}
	// Función para saber si está logueado la/el usuaria/o
	function isLogged() {
		// El return devuelve true o false, según lo que retorne la función isset()
		return isset($_SESSION['userLoged']);
	}



?>
