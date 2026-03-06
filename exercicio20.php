<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 20</title>
</head>
<body>
    <h1>Exercício 20</h1>
    <h2>Média de Idades (Para em número negativo)</h2>

    <form method="POST">
        <label>Digite as idades separadas por vírgula (ex: 20, 30, 10, -1):</label><br>
        <input type="text" name="txtIdades" required style="width: 300px;">
        <button type="submit" name="btnCalcular">Calcular Média</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $lista = $_POST['txtIdades'];
        $media = calcularMediaIdades($lista);

        echo "<h3>Resultado:</h3>";
        echo "A média das idades informadas é: <strong>$media</strong>";
    }
    ?>

    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio19.php">Voltar para o exercicio anterior</a>
</body>
</html>