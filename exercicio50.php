<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 30</title>
</head>
<body>
    <h1>Soma de Matrizes 3x3</h1>

    <form method="POST">
        <div style="display: flex; gap: 20px;">
            <div>
                <p>Matriz A:</p>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                        echo "<input type='number' name='m1[$i][$j]' required style='width:40px;'> ";
                    }
                    echo "<br>";
                }
                ?>
            </div>
            <div>
                <p>Matriz B:</p>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                        echo "<input type='number' name='m2[$i][$j]' required style='width:40px;'> ";
                    }
                    echo "<br>";
                }
                ?>
            </div>
        </div>
        <br>
        <button type="submit" name="btnCalcular">Somar Matrizes</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $resultado = somarMatrizes($_POST['m1'], $_POST['m2']);
        
        echo "<h3>Matriz Resultante (A + B):</h3>";
        foreach ($resultado as $linha) {
            echo implode(" | ", $linha) . "<br>";
        }
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio49.php">Voltar para o exercicio anterior</a>
</body>
</html>