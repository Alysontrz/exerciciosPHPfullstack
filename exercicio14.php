<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
<?php include('funcoes.php'); ?>
    <form method="POST">
        <label>Primeiro número: </label>
        <input type="number" name="primeiroNumero" id="primeiroNumero">
        <br><br>
        <br><br>
        <button type="submit">Calcular
            <?php
                $primeiroNumero = $_POST['primeiroNumero'];
           
            ?>
        </button>
        <h1>
        <?php imprimirNumeros($primeiroNumero, $segundoNumero );?>
        </h1>
    </form>
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio13.php">Voltar para o exercicio anterior</a>
</body>
</html>
 