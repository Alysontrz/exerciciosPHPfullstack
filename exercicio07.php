<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <h1>Exercicio 07</h1>
    <h2>7. Leia 2 horários e determine qual é mais tarde.</h2>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Primeiro Hórario: </label>
        <input type="number" name="horario" id="horario"/>
        <br>
        <button type="submit">Calcular
        <?php
            $primeiro = $_POST['horario'];
            $resultado = maiorHorario ($primeiro, $segundo);
        ?>
 
        </button>
    </form>
    <h1>
        <?php
         echo "Esse Horário é o mais tarde: $resultado";
        ?>
    </h1>
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio06.php">Voltar para o exercicio anterior</a>
    
</body>
</html>
 
 
 
 