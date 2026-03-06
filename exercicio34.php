<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 34</title>
</head>
<body>
    <h1>Exercício 34-Sequência de Fibonacci (15 termos)</h1>

    <form method="POST">
        <button type="submit" name="btnExibir">Gerar Sequência</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnExibir'])) {
        // Chama a função e mostra o resultado direto
        echo "<h3>Resultado:</h3>";
        echo "<p>" . gerarFibonacci15() . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio33.php">Voltar para o exercicio anterior</a>
</body>
</html>