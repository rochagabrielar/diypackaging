<?php

// Función traer todo del JSON
function traerUsuariosDelJson() {
  // Obtengo el contenido del archivo JSON
  $fileContent = file_get_contents("usuarios.json");
  // Decodifico el JSON a un array asociativo, importante el "true"
  $allUsers = json_decode($fileContent, true);
  // Retorno el array de usuarios
  return $allUsers;
}

?>
