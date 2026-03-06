<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 39</title>
</head>
<body>
    <h1>Exercício 39-Contar Nomes (Vogais)</h1>

    <form method="POST">
        <p>Digite os 10 nomes separados por vírgula:</p>
        <input type="text" name="txtNomes" placeholder="Ana, Igor, Pedro..." required style="width: 400px;">
        <br><br>
        <button type="submit" name="btnContar">Verificar</button>
    </form>

    <?php
    include('funcoes.php');

    if (isset($_POST['btnContar'])) {
        // Transforma o texto em uma lista (array)
        $listaNomes = explode(",", $_POST['txtNomes']);
        
        // Exibe o resultado da função
        echo "<h3>Resultado:</h3>";
        echo "<p>" . contarVogaisNomes($listaNomes) . "</p>";
    }
    ?>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio38.php">Voltar para o exercicio anterior</a>
</body>
</html>