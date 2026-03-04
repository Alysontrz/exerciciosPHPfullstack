<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <?php include('funcoes.php');   ?>
        <h1>Exercicio 12 </h1>
        <h2>  verifique se um numero é par ou ímpar  </h2>
        <form method="POST">
            <label>Informe um numero</label>
            <input type="number" name="numero" id="numero"/>
            <br>
            <button type="submit">Mostrar
                <?php
                    $num        =$_POST['numero'];
                    $resultado  =verificarParOuimpar($num);
                ?>
            </button>
        </form>
        <h1>
            <?php echo $resultado;?>
        </h1>
</body>    
</html>