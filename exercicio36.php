<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 36</title>
</head>
<body>
    <h1>Exercício 36-Calculadora de IMC</h1>

    <form method="POST">
        Peso (kg): <input type="number" name="txtPeso" step="0.1" required>
        <br><br>
        Altura (m): <input type="number" name="txtAltura" step="0.01" required>
        <br><br>
        <button type="submit" name="btnCalcular">Calcular IMC</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $p = $_POST['txtPeso'];
        $a = $_POST['txtAltura'];
        
        // Chama a função e mostra o texto direto
        echo "<h3>Resultado:</h3>";
        echo "<p>" . calcularIMC($p, $a) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar</a>
    <br></br>
    <a href="exercicio35.php">Voltar Para o exercicio anterior</a>
</body>
</html>