<?php

// // Función traer todo del JSON
// function traerUsuariosDelJson() {
//   // Obtengo el contenido del archivo JSON
//   $fileContent = file_get_contents("usuarios.json");
//   // Decodifico el JSON a un array asociativo, importante el "true"
//   $allUsers = json_decode($fileContent, true);
//   // Retorno el array de usuarios
//   return $allUsers;
// }

function traerUsuariosDeSql(){
  global $conexion;
  // La query que hay que hacer
  $sql = 'SELECT *
          FROM users';
 // // Preparo la query para ejecutarla
 $consulta = $conexion->query($sql);
 $allUsers = $consulta->fetchAll();
 return $allUsers;
}

?>
