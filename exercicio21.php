<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 21</title>
</head>
<body>
    <h1>Exercício 21</h1>
    <h2>Média e Valores Acima</h2>

    <form method="POST">
        <label>Digite 10 números (separados por vírgula):</label><br>
        <input type="text" name="txtNumeros" placeholder="Ex: 5, 10, 15..." required style="width: 300px;">
        <button type="submit" name="btnCalcular">Analisar</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnCalcular'])) {
        $dados = $_POST['txtNumeros'];
        $resultado = valoresAcimaDaMedia($dados);

        echo "<h3>Resultado:</h3>";
        echo "<div style='padding:10px; background:#f4f4f4;'>$resultado</div>";
    }
    ?>

    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio20.php">Voltar para o exercicio anterior</a>
</body>
</html>