<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Cálculo de Fatorial (While)</h1>

    <form method="POST">
        <p>Digite um número para calcular:</p>
        <input type="number" name="txtNumero" required>
        <button type="submit" name="btnCalcular">Calcular Fatorial</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $num = $_POST['txtNumero'];
        
        // Chama a função que criamos lá no funcoes.php
        $resultado = calcularFatorial($num);

        echo "<h3>Resultado:</h3>";
        echo "<p>$resultado</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o Menu</a>
</body>
</html>