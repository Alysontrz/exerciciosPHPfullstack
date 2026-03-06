<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 45</title>
</head>
<body>
    <h1>Exercício 45-Diferença entre Maior e Menor</h1>

    <form method="POST">
        <p>Digite 8 números separados por vírgula:</p>
        <input type="text" name="txtNumeros" placeholder="Ex: 10, 5, 20, 3, 8, 15, 2, 30" required style="width: 350px;">
        <br><br>
        <button type="submit" name="btnCalcular">Calcular Diferença</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $entrada = $_POST['txtNumeros'];
        
        echo "<h3>Resultado:</h3>";
        echo "<p>" . calcularDiferencaExtremos($entrada) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio44.php">Voltar para o exercicio anterior</a>
</body>
</html>