<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 17</title>
</head>
<body>
    <h1>Exercício 17</h1>
    <h2>Matriz Identidade 4x4</h2>

    <form method="POST">
        <button type="submit" name="verificar">Gerar Matriz</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['verificar'])) {
        $resultado = gerarMatrizIdentidade();
        echo "<h3>Resultado:</h3>";
        echo "<div style='font-family: monospace; font-size: 20px; letter-spacing: 5px;'>";
        echo $resultado;
        echo "</div>";
    }
    ?>
</body>
</html>