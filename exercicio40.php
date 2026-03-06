<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 40</title>
</head>
<body>
    <h1>Exercício 40-Validação de Senha </h1>

    <form method="POST">
        Digite a senha: <input type="text" name="txtSenha" required>
        <button type="submit" name="btnEntrar">Testar Senha</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnEntrar'])) {
        $senha = $_POST['txtSenha'];
        
        // Exibe o resultado da validação
        echo "<h3>Resultado:</h3>";
        echo "<p>" . validarSenha1($senha) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio39.php">Voltar para o exercicio anterior</a>
</body>
</html>