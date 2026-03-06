<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 37</title>
</head>
<body>
    <h1>Exercício 37-Múltiplos de 4 (1 a 50)</h1>

    <form method="POST">
        <button type="submit" name="btnMostrar">Mostrar Números</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnMostrar'])) {
        // Chama a função e imprime o resultado direto na tela
        echo "<h3>Resultado:</h3>";
        echo "<p>" . listarMultiplosQuatro() . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio36.php">Voltar para o exercicio anterior</a>
</body>
</html>