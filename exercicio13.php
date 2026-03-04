<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio13</title>       
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercicio 13</h1>
    <h2>13.Leia dois numeros e informe o maior.</h2>
    <form method="POST">
        <label>Informe um numero</label>
        <input type="number" name="idade1" id="idade1"/>
        <label>Informe outro numero </label>
        <input type="number" name="idade2" id="idade2"/>
        <br>
        <button type="submit">Mostrar
            <?php
                $num1=$_POST['idade1'];
                $num2=$_POST['idade2'];
                $resultado = LerDoisNumeros($num1,$num2);
            ?>
        </button>
    </form>
    <h1>
        <?php echo $resultado;?>
    </h1>
</body>
</html>