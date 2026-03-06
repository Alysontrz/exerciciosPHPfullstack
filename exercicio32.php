<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 32</title>
</head>
<body>
    <h1>Exercício 32-Média de Notas</h1>

    <form method="POST">
        <p>Nota 1: <input type="number" name="n1" step="0.1" required></p>
        <p>Nota 2: <input type="number" name="n2" step="0.1" required></p>
        <p>Nota 3: <input type="number" name="n3" step="0.1" required></p>
        <button type="submit" name="btnCalcular">Calcular</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        // Chama a função e imprime o texto direto
        echo "<h3>Resultado:</h3>";
        echo "<p>" . verificarAprovacao($n1, $n2, $n3) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio31.php">Voltar para o exercicio anterior</a>
</body>
</html>