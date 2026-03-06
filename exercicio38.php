<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 38</title>
</head>
<body>
    <h1>Exercício 38-Soma Diagonal Secundária</h1>

    <form method="POST">
        <p>Preencha a matriz 3x3:</p>
        <?php
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo "<input type='number' name='m[$i][$j]' required style='width:40px;'> ";
            }
            echo "<br>";
        }
        ?>
        <br>
        <button type="submit" name="btnCalcular">Calcular Soma</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $matriz = $_POST['m'];
        
        // Chama a função e exibe o resultado
        echo "<h3>Resultado:</h3>";
        echo "<p>" . somarDiagonalSecundaria($matriz) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio37.php">Voltar para o exercicio anterior</a>
</body>
</html>