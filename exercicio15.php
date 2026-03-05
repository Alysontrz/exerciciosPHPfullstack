<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 16</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício 15</h1>
    <h2>Verificar se é múltiplo de 3 e 5</h2>

    <form method="POST">
        <label>Informe um número:</label>
        <input type="number" name="num" id="num" required />
        <br>
        <button type="submit">Verificar</button>

        <?php 
        if (isset($_POST['num'])) {
            $num = $_POST['num'];
            $resultado = verificarMultiplo($num);
        }
        ?>
    </form>

    <hr>
    <h3><?php echo $resultado; ?></h3>

</body>
</html>