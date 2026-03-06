<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 46</title>
</head>
<body>
    <h1>Exercício 46-Soma Acumulada (0 para parar)</h1>

    <?php
    include('funcoes.php');

    // Inicializa a soma na sessão se não existir
    if (!isset($_SESSION['total'])) {
        $_SESSION['total'] = 0;
    }

    if (isset($_POST['btnEnviar'])) {
        $num = $_POST['txtNumero'];
        $resultado = acumularSoma($num, $_SESSION['total']);

        if ($resultado['status'] == 'encerrar') {
            echo "<h3>Resultado Final: " . $resultado['soma'] . "</h3>";
            session_destroy(); // Limpa a soma para começar de novo
            echo "<a href='exercicio26.php'>Reiniciar</a>";
            exit; // Para a execução para não mostrar o formulário
        } else {
            $_SESSION['total'] = $resultado['soma'];
        }
    }
    ?>

    <form method="POST">
        Digite um número: <input type="number" name="txtNumero" required>
        <button type="submit" name="btnEnviar">Somar</button>
    </form>

    <p>Soma atual: <strong><?php echo $_SESSION['total']; ?></strong></p>
    
    <br>
    <a href="index.php">Voltar para o menu</a>
    <br></br>
    <a href="exercicio45.php">Voltar para o exercicio anterior</a>
</body>
</html>