<?php
// Conexão com o banco de dados MariaDB/MySQL
$servername = "localhost";  // ou o endereço do seu servidor
$username = "root";  // seu nome de usuário do banco de dados
$password = "";    // sua senha do banco de dados
$dbname = "banco";  // nome do seu banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebendo dados do formulário
$signo = $_POST['signo'];
$idade = $_POST['idade'];
$cor_favorita = $_POST['cor_favorita'];
$hobbies = $_POST['hobbies'];
$personagem_iden = $_POST['personagem_iden'];
$username_instagram = $_POST['username_instagram'];

// Preparando a consulta SQL para inserir os dados
$sql = "INSERT INTO usuarios (signo, idade, cor_favorita, hobbies, personagem_iden, username_instagram) VALUES ('$signo', $idade, '$cor_favorita', '$hobbies', '$personagem_iden', '$username_instagram')";

// Executando a consulta e verificando se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fechando a conexão com o banco de dados
$conn->close();
?>
