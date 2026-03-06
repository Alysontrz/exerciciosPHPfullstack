<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body>
    <?php include('funcoes.php'); ?><!--chamar os metodos -->
    <form method="POST">
        <label>Primeiro numero: </label>
        <input type="number" name="primeiroNumero" id="primeiroNumero">
        <br><br>
        <label>Segundo numero: </label>
        <input type="number" name="segundoNumero" id="primeiroNumero">
        <br><br>
        <label>numero de busca: </label>
        <input type="number" name="terceiroNumero" id="terceiroNumero">
        <br><br>        
        <button type="submit">Calcular
            <?php
                $primeiroNumero = $_POST['primeiroNumero'];
                $segundoNumero = $_POST['segundoNumero'];
                $numero         = $_POST['terceiroNumero'];
                $resultado      = verificarNumero($primeiroNumero, $segundoNumero, $numero);
            ?>
        </button>
        <?php
            if($resultado == true){
                echo "O $numero esta no intervalo entre $primeiroNumero e $segundoNumero";
            }else{
                echo "O $numero não esta no intervalo entre $primeiroNumero e $segundoNumero";
            }
        ?>
    </form>   
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio02.php">Voltar para o exercicio anterior</a> 
</body>
</html>