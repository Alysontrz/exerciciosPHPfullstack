<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 30</title>
</head>
<body>
    <h1>Exercício 30-Calculadora de Salário</h1>

    <form method="POST">
        <p>Horas trabalhadas no mês:</p>
        <input type="number" name="txtHoras" step="0.1" required>
        
        <p>Valor da hora (R$):</p>
        <input type="number" name="txtValor" step="0.01" required>
        
        <br><br>
        <button type="submit" name="btnCalcular">Calcular Salário</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $h = $_POST['txtHoras'];
        $v = $_POST['txtValor'];
        
        // Chama a função e mostra o resultado
        $resultado = calcularSalario($h, $v);

        echo "<h3>Resultado:</h3>";
        echo "<p><strong>$resultado</strong></p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio29.php">Voltar para o exercicio anterior</a>
</body>
</html>