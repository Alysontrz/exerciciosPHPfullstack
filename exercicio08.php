<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>
<h1>Exercicio 08</h1>
    <?php include('funcoes.php'); ?>
    <h2>8.Leia 5 numeros e calcule a média.</h2>
    <form method="POST">
        <label>Informe o primeiro número: </label>
        <input type="number" name="primeiroNumero" id="primeiroNumero"/>
        <input type="number" name="segundoNumero" id="segundoNumero"/>
        <input type="number" name="terceiroNumero" id="terceiroNumero"/>
        <input type="number" name="quartoNumero" id="quartoNumero"/>
        <input type="number" name="quintoNumero" id="quintoNumero"/>

        <button> Calcular 
            <?php
                $primeiro = $_POST['primeiroNumero'];
                $segundo  = $_POST['segundoNumero'];
                $terceiro = $_POST['terceiroNumero'];
                $quarto   = $_POST['quartoNumero'];
                $quinto   = $_POST['quintoNumero'];

                $resultado = calcularMedia($primeiro, $segundo, $terceiro, $quarto, $quinto);

            ?>
        </button>

        <?php 
         echo $resultado;
        ?> 

    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio07.php">Voltar para o exercicio anterior</a>
</body>
</html>