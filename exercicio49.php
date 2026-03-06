<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 29</title>
</head>
<body>
    <h1>20 Primeiros Múltiplos de 5</h1>

    <form method="POST">
        <button type="submit" name="btnGerar">Gerar Vetor</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnGerar'])) {
        // Chama a função e exibe o resultado
        echo "<h3>Resultado:</h3>";
        echo "<p>" . gerarVinteMultiplos() . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio48.php">Voltar para o exercicio anterior</a>
</body>
</html>