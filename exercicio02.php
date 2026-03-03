<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>

    <h1> Exercício 02 </h1>
    <br>
    <h2> Verifique se um ano é bissexto! </h2>
    <br>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Informe o ano: </label>
        <input type="number" name="ano" id="ano"/>
        <br>
        <button type="submit">Calcular</button>
        <?php
           $ano       = $_POST['ano'];
           $resultado = bissexto($ano);

        ?>
        </button>
        <br>
        <h1>
            <?php echo $resultado; ?>
        </h1>
    </form>
</body>
</html>