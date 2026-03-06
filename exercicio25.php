<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 25</title>
</head>
<body>
    <h1>Exercício 25-Consulta de Tabela de Preços</h1>

    <form method="POST">
        <p>Digite o código do produto (1 a 5):</p>
        <input type="number" name="txtCodigo" min="1" max="5" required>
        <button type="submit" name="btnConsultar">Consultar Produto</button>
    </form>

    <?php
    include('funcoes.php');

    // Verifica se o botão foi clicado
    if (isset($_POST['btnConsultar'])) {
        $cod = $_POST['txtCodigo'];
        
        // Chama a função definida no funcoes.php
        $resultado = consultarProduto($cod);

        echo "<h3>Informações do Produto:</h3>";
        echo "<p style='color: blue;'><strong>$resultado</strong></p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio24.php">Voltar para o exercicio anterior</a>
</body>
</html>