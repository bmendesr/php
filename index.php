<?php 

require_once("config.php");



//Carrega um usuario
//$root = new Usuario();
//$root->loadbyid(3);
//echo $root;

//Carrega lista de usuarios

//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma Lista de usuários buscando pelo login

//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("root","123ç");

echo $usuario;
 ?>