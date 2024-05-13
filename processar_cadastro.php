<?php
include_once "Dao.php";

$dao = new Dao();
var_dump($dao);

//if ($dao->connect_error) {
//    die("Falha na conexão: " . $dao->connect_error);
//}


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$dao->insertLogin($nome,$senha,$email);

?>
