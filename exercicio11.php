<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 11</h1>
    <h2>11. Classifique uma pessoa com base na idade: criança, jovem, adulto, idoso</h2>
    <form method="POST">
        <label>Informe uma idade: </label>
        <input type="number" name="idade" id="idade"/>
        <br>
        <button type="submit">Mostrar
            <?php
                $idade     = $_POST['idade'];
                $resultado = classificacaoIdade($idade);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>

    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio10.php">Voltar para o exercicio anterior</a>
   
</body>
</html>
 