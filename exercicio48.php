<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 28</title>
</head>
<body>
    <h1>Gerador de Tabuada</h1>

    <form method="POST">
        Digite um número (1 a 10): 
        <input type="number" name="txtNum" min="1" max="10" required>
        <button type="submit" name="btnCalcular">Gerar Tabuada</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $num = $_POST['txtNum'];
        
        echo "<h3>Resultado:</h3>";
        echo "<div>" . gerarTabuada($num) . "</div>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio47.php">Voltar para o exercicio anterior</a>
</body>
</html>