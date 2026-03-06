<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 42</title>
</head>
<body>
    <h1>Exercício 42-Conversor de Notas para Conceito</h1>

    <form method="POST">
         Nota 1: <input type="number" name="n1" step="0.1" required><br><br>
         Nota 2: <input type="number" name="n2" step="0.1" required><br><br>
         Nota 3: <input type="number" name="n3" step="0.1" required><br><br>
        <button type="submit" name="btnCalcular">Verificar Conceito</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        // Exibe o resultado da função
        echo "<h3>Resultado:</h3>";
        echo "<p>" . converterParaConceito($n1, $n2, $n3) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio41.php">Voltar para o exercicio anterior</a>
</body>
</html>