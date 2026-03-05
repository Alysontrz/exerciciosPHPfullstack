<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercico 16</h1>
<h2> 15.Leia três valores e verifique se formam um triângulo. Classifique como equilátero, isósceles ou 
escaleno</h2>
<form method="POST">
 <label>Lado A:</label>
    <input type="number" name="l1" required><br>
    <label>Lado B:</label>
    <input type="number" name="l2" required><br>
    <label>Lado C:</label>
    <input type="number" name="l3" required><br>
    <button type="submit" name="verificar">Analisar Triângulo</button>
</form>

<?php
    include('funcoes.php');

    if (isset($_POST['verificar'])) {
        $a = $_POST['l1'];
        $b = $_POST['l2'];
        $c = $_POST['l3'];

        $resultado = classificarTriangulo($a, $b, $c);
        echo "<h3>Resultado: $resultado</h3>";
    }
?>
</body>
</html>