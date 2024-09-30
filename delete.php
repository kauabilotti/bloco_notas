<?php
include 'db.php'; 

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $conn->query("DELETE FROM notas WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Nota</title>
</head>
<body>
    <h1>Deletar Nota</h1>
    <form method="post">
        <p>Tem certeza que deseja deletar esta nota?</p>
        <input type="submit" value="Deletar">
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>

<?php $conn->close(); ?>