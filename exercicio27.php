<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 27</title>
</head>
<body>
    <h1>Exercício 27-Soma de 1 até N</h1>

    <form method="POST">
        <p>Calcular a soma de 1 até:</p>
        <input type="number" name="txtN" required min="1">
        <button type="submit" name="btnCalcular">Calcular</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $valorN = $_POST['txtN'];
        
        // Chama a função e exibe o resultado
        echo "<h3>Resultado:</h3>";
        echo "<p>" . calcularSomaAteN($valorN) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio26.php">Voltar para o exercicio anterior</a>
</body>
</html>