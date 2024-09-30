<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bloco";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nota</title>
</head>
<body>
    <h1>Criar Nova Nota</h1>
    <form method="POST" action="">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="conteudo">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo" required></textarea>
        <br>
        <input type="hidden" name="usuario_id" value="1"> 
        <button type="submit">Criar Nota</button>
    </form>
</body>
</html>