<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $conn->query("UPDATE notas SET titulo='$titulo', conteudo='$conteudo' WHERE id=$id");

    header("Location: index.php");
}

$nota = $conn->query("SELECT titulo, conteudo FROM notas WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Nota</title>
</head>
<body>
    <h1>Editar Nota</h1>
    <form method="post">
        Título: <input type="text" name="titulo" value="<?php echo $nota['titulo']; ?>" required><br>
        Conteúdo: <textarea name="conteudo" required><?php echo $nota['conteudo']; ?></textarea><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>

<?php $conn->close(); ?>
