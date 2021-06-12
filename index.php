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

//$usuario = new Usuario();
//$usuario->login("root","123ç");

//echo $usuario;

/*criando um novo usuário

$aluno = new Usuario("aluno","alu123");

$aluno->insert();

echo $aluno;*/
$usuario = new Usuario();

$usuario->loadByid(7);

$usuario->update("aluno ramos","ramossenha");

echo $usuario;

 ?>