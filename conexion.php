<?php

$host='127.0.0.1';
$db = 'diy';
$username = 'root';
$password = '';

$dsn= "mysql:host=$host;dbname=$db";

// intenta hacer esto, sino puede por un error, va al catch
try{
 // create a PDO connection with the configuration data
 $conexion = new PDO($dsn, $username, $password);

 // displays a message if connected to database successfully
 if($conexion){
 echo "Conectado a la base de datos <strong>$db</strong> correctamente!";
 }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}
// $dsn = 'mysql:host=localhost;dbname:diy;port:3306';
// $conexion = new PDO($dsn, 'root', '');
//
//
// var_dump($conexion);
// try {
//   $dsn = 'mysql:host=localhost;dbname=diy;port=3306';
//   $conexion = new PDO($dsn, 'root', 'root');
// }
// catch (PDOException $error) {
//
//   echo("error");
// }
//
//
// ?>
