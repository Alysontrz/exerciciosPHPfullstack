<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 19</title>
</head>
<body>
    <h1>Exercício 19</h1>
    <h2>Diagonal Principal de Matriz 3x3</h2>

    <form method="POST">
        <?php for($i=0; $i<3; $i++): ?>
            <div class="linha-matriz">
                <?php for($j=0; $j<3; $j++): ?>
                    <input type="number" name="m[<?php echo $i ?>][<?php echo $j ?>]" required>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
        <br>
        <button type="submit" name="verificar">Exibir Diagonal</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['verificar'])) {
        $matriz = $_POST['m'];
        $resultado = diagonalPrincipal($matriz);

        echo "<h3>Resultado:</h3>";
        echo "A diagonal principal é: <strong>$resultado</strong>";
    }
    ?>

    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio18.php">Voltar para o exercicio anterior</a>
</body>
</html>