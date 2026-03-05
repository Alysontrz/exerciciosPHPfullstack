<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 18</title>
</head>
<body>
    <h1>Exercício 18</h1>
    <h2>Filtrar Números Pares</h2>

    <form method="POST">
        <label>Digite 10 números separados por vírgula:</label><br>
        <input type="text" name="numeros" placeholder="Ex: 1,2,3,4..." required style="width: 300px;">
        <button type="submit" name="verificar">Verificar Pares</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['verificar'])) {
        $lista = $_POST['numeros'];
        $resultado = acharPares($lista);

        echo "<h3>Números Pares encontrados:</h3>";
        echo $resultado;
    }
    ?>
</body>
</html>