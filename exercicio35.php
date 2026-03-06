<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 35</title>
</head>
<body>
    <h1>Exercício 35-Contador de Negativos</h1>

    <form method="POST">
        <p>Digite os 15 números separados por vírgula:</p>
        <input type="text" name="txtNumeros" placeholder="Ex: 10, -5, 3, -2..." required style="width: 300px;">
        <br><br>
        <button type="submit" name="btnVerificar">Verificar</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnVerificar'])) {
        $entrada = $_POST['txtNumeros'];
        
        // Chama a função e mostra o resultado simples
        echo "<h3>Resultado:</h3>";
        echo "<p>" . contarNegativos($entrada) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio34.php">Voltar para o exercicio anterior</a>
</body>
</html>