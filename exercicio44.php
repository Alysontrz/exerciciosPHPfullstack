<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 44</title>
</head>
<body>
    <h1>Exercício 44-Vetor de Quadrados (1 a 10)</h1>

    <form method="POST">
        <button type="submit" name="btnGerar">Gerar e Exibir</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnGerar'])) {
        // Chama a função e mostra o resultado direto
        echo "<h3>Resultado:</h3>";
        echo "<p>" . gerarQuadrados() . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio43.php">Voltar para o exercicio anterior</a>
</body>
</html>