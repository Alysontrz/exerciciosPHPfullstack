<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 31</title>
</head>
<body>
    <h1>Maior Valor e Posição</h1>

    <form method="POST">
        <p>Digite 8 números separados por vírgula:</p>
        <input type="text" name="txtNumeros" placeholder="Ex: 5, 20, 3, 45, 12, 8, 2, 30" required style="width: 350px;">
        <br><br>
        <button type="submit" name="btnVerificar">Verificar Maior</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnVerificar'])) {
        echo "<h3>Resultado:</h3>";
        echo "<p>" . encontrarMaiorEPosicao($_POST['txtNumeros']) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio50.php">Voltar para o exercicio anterior</a>
</body>
</html>