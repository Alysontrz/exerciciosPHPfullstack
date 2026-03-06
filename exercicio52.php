<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 32</title>
</head>
<body>
    <h1>Dia da Semana</h1>

    <form method="POST">
        Digite um número (1-7): 
        <input type="number" name="txtDia" min="1" max="7" required>
        <button type="submit" name="btnVerificar">Verificar Dia</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnVerificar'])) {
        $num = $_POST['txtDia'];
        
        echo "<h3>Resultado:</h3>";
        echo "<p>O dia correspondente é: <strong>" . descobrirDiaSemana($num) . "</strong></p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio51.php">Voltar para o exercicio anterior</a>
</body>
</html>