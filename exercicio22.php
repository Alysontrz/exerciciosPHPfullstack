<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 22</title>
    <style>
        input { width: 45px; margin: 2px; text-align: center; }
        .linha { margin-bottom: 5px; }
    </style>
</head>
<body>
    <h1>Exercício 22</h1>
    <h2>Maior Linha (Soma) - Matriz 4x4</h2>

    <form method="POST">
        <?php for($i = 0; $i < 4; $i++): ?>
            <div class="linha">
                <?php for($j = 0; $j < 4; $j++): ?>
                    <input type="number" name="m[<?php echo $i ?>][<?php echo $j ?>]" required>
                <?php endfor; ?>
            </div>
        <?php endfor; ?>
        <br>
        <button type="submit" name="btnVerificar">Verificar Maior Linha</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnVerificar'])) {
        $matriz = $_POST['m'];
        $resultado = maiorLinhaMatriz($matriz);

        echo "<h3>Resultado:</h3>";
        echo "<p>$resultado</p>";
    }

        // Função para calcular o fatorial
    function calcularFatorial($n) {
    $resultado = 1;
    $i = $n;

    // Enquanto o contador for maior que 1
    while ($i > 1) {
        $resultado *= $i; // Multiplica o resultado pelo número atual
        $i--;             // Decrementa o contador
    }

    return $resultado;
}
    ?>
</body>
</html>