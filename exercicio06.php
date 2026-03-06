<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <h1>Exercicio 06</h1>
    <h2>6. Verifique se uma senha digitada é válida.</h2>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Primeiro número: </label>
        <input type="number" name="senha" id="senha"/>
        <br>
        <button type="submit">Calcular
        <?php
            $senha = $_POST['senha'];
            $resultado = senhaValida ($senha);
        ?>
 
        </button>
    </form>
    <h1>
        <?php
        echo "Validar senha: $resultado";
        ?>
    </h1>
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio05.php">Voltar para o exercicio anterior</a>
    
 
</body>
</html>
 