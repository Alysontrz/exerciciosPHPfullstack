<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício - Dia da Semana</title>
</head>
<body>
    <h1>Verificar Dia da Semana</h1>

    <form method="POST">
        <label>Informe um número (1-7):</label>
        <input type="number" name="txtDia" min="1" max="7" required>
        <button type="submit" name="btnVerificar">Verificar</button>
    </form>

    <?php
    include('funcoes.php');

    // Usando o isset para verificar o clique no botão (como vimos antes)
    if (isset($_POST['btnVerificar'])) {
        $num = $_POST['txtDia'];
        
        // Chama a função e armazena o retorno
        $resultado = verificarDiaSemana($num);

        echo "<h3>Resultado:</h3>";
        echo "<p>O dia correspondente é: <strong>$resultado</strong></p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar ao Menu</a>
</body>
</html>