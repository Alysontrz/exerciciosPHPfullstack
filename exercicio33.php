<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 33</title>
</head>
<body>
    <h1>Exercício 33-Contar Pares na Matriz 3x3</h1>

    <form method="POST">
        <p>Preencha a matriz:</p>
        <?php
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo "<input type='number' name='m[$i][$j]' required style='width:40px;'> ";
            }
            echo "<br>";
        }
        ?>
        <br>
        <button type="submit" name="btnContar">Contar Pares</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnContar'])) {
        $matriz = $_POST['m'];
        
        // Exibe o resultado da função
        echo "<h3>Resultado:</h3>";
        echo "<p>" . contarParesMatriz($matriz) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio32.php">Voltar para o exercicio anterior</a>
</body>
</html>