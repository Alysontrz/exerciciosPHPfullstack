<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 29</title>
</head>
<body>
    <h1>Exercicio 29-Soma de Matriz 4x4</h1>

    <form method="POST">
        <h3>Preencha os valores:</h3>
        <?php
        // Gera os campos da matriz 4x4
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                echo "<input type='number' name='m[$i][$j]' required>";
            }
            echo "<br>";
        }
        ?>
        <br>
        <button type="submit" name="btnSomar">Somar Tudo</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnSomar'])) {
        $matrizEntrada = $_POST['m'];
        
        // Chama a função e exibe o resultado
        $resultado = somarMatriz4x4($matrizEntrada);

        echo "<h3>Resultado:</h3>";
        echo "<p><strong>$resultado</strong></p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio28.php">Voltar para o exercicio anterior</a>
</body>
</html>