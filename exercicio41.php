<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 41</title>
</head>
<body>
    <h1>Exercício 41-Contar o Número 7</h1>

    <form method="POST">
        <p>Digite 10 números separados por vírgula:</p>
        <input type="text" name="txtNumeros" placeholder="Ex: 7, 10, 5, 7, 2..." required style="width: 300px;">
        <br><br>
        <button type="submit" name="btnVerificar">Verificar</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnVerificar'])) {
        $entrada = $_POST['txtNumeros'];
        
        // Chama a função e mostra o resultado
        echo "<h3>Resultado:</h3>";
        echo "<p>" . contarSetes($entrada) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio40.php">Voltar para o exercicio anterior</a>
</body>
</html>