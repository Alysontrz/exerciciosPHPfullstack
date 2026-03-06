<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 27</title>
</head>
<body>
    <h1>Armazenar Múltiplos de 5</h1>

    <form method="POST">
        <p>Digite os 10 números separados por vírgula:</p>
        <input type="text" name="txtNumeros" placeholder="Ex: 5, 12, 20, 33, 50..." required style="width: 350px;">
        <br><br>
        <button type="submit" name="btnFiltrar">Filtrar e Armazenar</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnFiltrar'])) {
        $entrada = $_POST['txtNumeros'];
        
        echo "<h3>Resultado:</h3>";
        echo "<p>" . filtrarMultiplosCinco($entrada) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio46.php">Voltar para o exercicio anterior</a>
</body>
</html>