<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 43</title>
</head>
<body>
    <h1>Exercício 43-Calculadora IMC Básica</h1>

    <form method="POST">
        Peso (kg): <input type="number" name="p" step="0.1" required><br><br>
        Altura (m): <input type="number" name="a" step="0.01" required><br><br>
        <button type="submit" name="btn">Calcular</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btn'])) {
        // Pega os valores e chama a função
        echo "<h3>Resultado:</h3>";
        echo "<p>" . calcularIMC1($_POST['p'], $_POST['a']) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio42.php">Voltar para o exercicio anterior</a>
</body>
</html>