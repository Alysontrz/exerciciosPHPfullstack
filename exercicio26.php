<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 26</title>
</head>
<body>
    <h1>Exercicio 26-Soma e Multiplicação de Vetores</h1>

    <form method="POST">
        <h3>Digite 10 números para o Vetor A e 10 para o Vetor B:</h3>
        
        <?php for($i=0; $i<10; $i++){ ?>
            A<?php echo $i+1 ?>: <input type="number" name="a[]" required style="width:40px">
            B<?php echo $i+1 ?>: <input type="number" name="b[]" required style="width:40px">
            <br>
        <?php } ?>

        <br>
        <button type="submit" name="btnOk">Calcular Tudo</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnOk'])) {
        // Pega as listas de números vindas do formulário
        $vetorA = $_POST['a'];
        $vetorB = $_POST['b'];

        // Chama a função e separa os resultados
        list($resultadoSoma, $resultadoMult) = processarVetores($vetorA, $vetorB);

        echo "<h2>Resultados:</h2>";
        for ($i = 0; $i < 10; $i++) {
            echo "Posição $i: Soma = " . $resultadoSoma[$i] . " | Mult = " . $resultadoMult[$i] . "<br>";
        }
    }
    ?>
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio25.php">Voltar para o exercicio anterior</a>
</body>
</html>