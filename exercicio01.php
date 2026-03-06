<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <?php  include('funcoes.php');  ?>
    <h1>Exercício 01</h1>
    <br>
    <h2>Receba dois números e retorne a soma deles</h2>
    <br><br>
    <form method="POST">
        <label>Primeiro Número: </label>
        <input type="number" name="primeiroNumero" id="primeiroNumero"/>
        <br><br>
        <label>Segundo Número: </label>
        <input type="number" name="segundoNumero" id="segundoNumero"/>
        <br><br>
        <button type="submit">Calcular
            <?php    
                $num1 = $_POST["primeiroNumero"];
                $num2 = $_POST["segundoNumero"];
                //Fazer a operação
                $resultado = exercicio01($num1,$num2);
                $subtracao = subtrair($num1,$num2);
                $mult      = multiplicacao($num1,$num2);
                $divi      = divisao($num1, $num2);
                $potencia  = potencia($num1,$num2);
                $raiz1     = raiz($num1);
                $raiz2     = raiz($num2);
            ?>
        </button>
        <br><br>
        <h1>
            <?php
                echo $resultado;
            ?>
        </h1>
        <h1>
            <?php
                echo $subtracao;
            ?>
        </h1>
        <h1>
            <?php
                echo $mult;                                
            ?>
        </h1>
        <h1>
            <?php
                echo $divi;                                
            ?>
        </h1>
        <h1>
            <?php
                echo $potencia;                                
            ?>
        </h1>
        <h1>
            <?php
                echo $raiz1;                                
            ?>
        </h1>
        <h1>
            <?php
                echo $raiz2;                                
            ?>
        </h1>
    </form>
    <br><br>
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br> 
</body>
</html>