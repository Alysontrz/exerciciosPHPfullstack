<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
<?php include('funcoes.php');    ?>
    <h1>Exercício 05</h1>
    <h2>5. Leia um número de 1 a 7 e mostre o dia da semana</h2>
    <form method="POST">
        <label>Informe uma número: </label>
        <input type="number" name="num" id="num"/>
        <br>
        <button type="submit">Mostrar
            <?php
                $num     = $_POST['num'];
                $resultado = diaDaSemana($num);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
 
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio05.php">Voltar para o exercicio anterior</a>
   
</body>
</html>