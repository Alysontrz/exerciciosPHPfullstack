<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 31</title>
</head>
<body>
    <h1>Exercício 31-Matriz 3x3 - Acima da Média</h1>

    <form method="POST">
        <p>Preencha a matriz:</p>
        <?php
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo "<input type='number' name='m[$i][$j]' required>";
            }
            echo "<br>";
        }
        ?>
        <br>
        <button type="submit" name="btnVerificar">Verificar</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnVerificar'])) {
        $m = $_POST['m'];
        
        // Exibe o retorno da função
        echo "<h3>Resultado:</h3>";
        echo "<p>" . matrizMediaGeral($m) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio30.php">Voltar para o exercicio anterior</a>
</body>
</html>