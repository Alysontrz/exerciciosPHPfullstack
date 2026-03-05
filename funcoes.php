<?php

    function exercicio01($num1, $num2){
        return "A soma é: ".((int)$num1 + (int)$num2);
    }//fim do exercício01  
    
    function subtrair($num1, $num2){
        return "A subtração é: ".((int)$num1 - (int)$num2);
    }//fim do método

    function multiplicacao($num1, $num2){
        return "A multiplicação é: ".((int)$num1 * (int)$num2);
    }//fim da multiplicação

    function divisao($num1, $num2){
        if($num2 == 0){
            return "Impossível dividir por zero!";
        }else if($num1 < 0 || $num2 < 0){
            return "Impossível dividir por número negativo!";
        }else{
            return "A divisão é: ".((int)$num1 / (int)$num2);
        }//fim do if
    }//fim do método

    function potencia($num1,$num2){
        if($num2 < 0){
            return "Impossível calcular a potência!";
        }else{
            return "A potência é: ".pow((int)$num1, (int)$num2);
        }//fim do if
    }//fim do potencia

    function raiz($num1){
        if($num1 < 0){
            return "Impossível calcular raiz de número negativo!";
        }else{
            return "A raiz é: ".sqrt((int)$num1);
        }//fim do if
    }//fim do método

    //1. Verifique se um ano é bissexto. 
    function bissexto($num1){
        if($num1 % 4 == 0 && $num1 % 100 != 0){
            return "O ano é bissexto!";
        }else{
            return "O ano não é bissexto!";
        }
    }//fim do bissexto

    //verificar se um numero esta entre 100 e 200
    function verificarNumero($inicio, $fim, $num){
        for($i=$inicio;$i <= $fim;$i++){  
            if($i == (int) $num){
                return true;
            }
        }//fim do for
        return false;
    }//FIM DO METODO

    //4.leia a idade e verifique se pode votar: >=16 e < 18 facultativo; >= 18 obrigatorio;
    function podeVotar($idade){
          if($idade >= 16 && $idade < 18){
              return "voce nao pode votar (voto facultativo)";
        }else if($idade >= 18){
            return "VOCE TEM QUE VOTAR";
        }else{
            return "VOCE NAO PRECISA VOTAR";
        }
    }//fim do metodo

    //5.leia um numero de 1 a 7 e mostre o dia da semana
    function diaDaSemana($num){
        switch($num){
            case 1:
                return "Domingo";
                break;//encerra o switch
            case 2:
                return "Segunda";
                break;//encerra o switch
            case 3:
                return "terça";
                break;//encerra o switch
            case 4:
                return "Quarta";
                break;//encerra o switch
            case 5:
                return "Quinta";
                break;//encerra o switch
            case 6:
                return "Sexta";
                break;//encerra o switch
            case 7:
                return "Sabado";
                break;//encerra o switch
            default:
                return "O numero informado é invalido";
                break;//encerra o switch        
            }//fim do switch
    }//fim do metodo

    //6.verifique se uma senha digitada e valida
    function validarSenha($senha){
        $senhaBD = 1000;
        if($senhaBD == $senha){
            return "Bem-vindo";
        }else{
            return "Senha invalida";
        }
    }//fim do metodo

    //7.leia 2 horario e determine qual é mais tarde.
    function maiorHorario($primeiro, $segundo){
        if($primeiro  >  $segundo){
            return "$primeiro é maior que o $segundo";
        }else{
            return "$segundo é maior que o $primeiro";
        }
    }//fim do maior horario


        //8. leia 5 numeros e calcule a media 
    function calcularMedia($primeiro, $segundo, $terceiro, $quarto, $quinto){
            $media = ((int)$primeiro+(int)$segundo+(int)$terceiro+(int)$quarto+(int)$quinto)/5;
            return "A media é: $media";
    }//fim do calcular media

        //9.leia numeros ate que a soma ultrapasse a 100
    function LerNumerosAte100($primeiro ,$segundo , $terceiro, $quarto ,$quinto){
            $resultado = ((int)$primeiro + (int)$segundo + (int)$terceiro + (int)$quarto + (int)$quinto);
            return "A soma final é:  $resultado";
    }//fim do Ler numerros

        //10.solicite senhas ate que uma senha valida seja informada
    function SolicitarSenha($senha){
        $senhaBD = 1000;
        if($senhaBD == $senha){
            return "Senha correta!";
        }else{
            return "Senha invalida!";
        }   
    }//fim do Solicitar senha 

       //11. Classifique uma pessoa com base na idade: criança, jovem, adulto, idoso
    function classificacaoIdade($idade){
        if($idade <= 12){
            return "Criança";
        }else if($idade <=18){
                return "Jovem";
        }else if($idade <=60){
                return "Adulto";
        }else{
             return "Idoso";
        }
    }
        //12.verifique se um numero é par ou ímpar.
    function VerificarParOuimpar($num){
        if($num %2 == 0){
            return "par";
        }else {
            return "impar";
        }
    }//fim do 12.
    
        //13.Leia dois numero e exiba o maior deles
    function LerDoisNumeros($num1, $num2){
        if($num1 > $num2){     
                return "$num1 maior que o $num2";
            }else {
                return "$num2 é maior que o $num1";
            }
        }
    
        //14.Imprima os números de 1 a 100 com para.
    function imprimirNumeros($inicio,$fim){
        for($i=$inicio;$i <= $fim;$i++){
            echo "<br>".$i;
        }          
    }

        // Verifique se um número é múltiplo de 3 e 5 ao mesmo tempo
    function verificarMultiplo($num) {
    if ($num % 3 == 0 && $num % 5 == 0) {
        return "O número $num é múltiplo de 3 e 5.";
    } else {
        return "O número $num não é múltiplo de 3 e 5 .";
    }
}

    function classificarTriangulo($a, $b, $c) {
    if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
        
        if ($a == $b && $b == $c) {
            return "Triângulo Equilátero (Todos os lados iguais)";
        } elseif ($a == $b || $a == $c || $b == $c) {
            return "Triângulo Isósceles (Dois lados iguais)";
        } else {
            return "Triângulo Escaleno (Todos os lados diferentes)";
        }
        
    } else {
        return "Os valores informados NÃO formam um triângulo.";
    }
}

// 17. Gerar Matriz Identidade 4x4
function gerarMatrizIdentidade() {
    $resultado = "";
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            if ($i == $j) {
                $resultado .= " 1 ";
            } else {
                $resultado .= " 0 ";
            }
        }
        $resultado .= "<br>"; // Quebra de linha para o HTML
    }
    return $resultado;
}

// 18. Recebe uma string de números, transforma em vetor e retorna os pares
function acharPares($stringNumeros) {
    // explode transforma a string em um array (vetor)
    $vetor = explode(",", $stringNumeros);
    $pares = "";

    foreach ($vetor as $num) {
        $n = trim($num); // remove espaços extras
        if ($n % 2 == 0) {
            $pares .= $n . " ";
        }
    }

    return $pares != "" ? $pares : "Nenhum número par encontrado.";
}

// 19. Recebe uma matriz 3x3 e retorna os valores da diagonal principal
function diagonalPrincipal($matriz) {
    $diagonal = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($i == $j) {
                $diagonal[] = $matriz[$i][$j];
            }
        }
    }
    return implode(", ", $diagonal); 
}

// 20. Calcular média de idades até um número negativo
function calcularMediaIdades($lista) {
    $idades = explode(",", $lista);
    $soma = 0;
    $quantidade = 0;
    $i = 0;

    // "Enquanto" o índice existir na lista
    while ($i < count($idades)) {
        $idadeAtual = (int)trim($idades[$i]);

        // Se a idade for negativa, para o laço imediatamente
        if ($idadeAtual < 0) {
            break; 
        }

        $soma += $idadeAtual;
        $quantidade++;
        $i++;
    }

    if ($quantidade > 0) {
        return $soma / $quantidade;
    } else {
        return 0;
    }
}
// 21. Calcular média e retornar valores acima dela
function valoresAcimaDaMedia($lista) {
    $vetor = explode(",", $lista);
    $soma = 0;
    $qtd = count($vetor);

    // Passo 1: Calcular a média
    foreach ($vetor as $n) {
        $soma += (float)trim($n);
    }
    $media = $soma / $qtd;

    // Passo 2: Achar quem está acima
    $acima = "";
    foreach ($vetor as $n) {
        if ((float)trim($n) > $media) {
            $acima .= trim($n) . " ";
        }
    }

    return "Média: $media <br> Valores acima: " . ($acima ?: "Nenhum");
}

// 22. Calcular a maior linha de uma matriz 4x4
function maiorLinhaMatriz($matriz) {
    $maiorSoma = -INF; // Começa com um valor muito baixo
    $indiceMaiorLinha = 0;

    for ($i = 0; $i < 4; $i++) {
        $somaLinha = array_sum($matriz[$i]); // Soma todos os elementos da linha atual

        if ($somaLinha > $maiorSoma) {
            $maiorSoma = $somaLinha;
            $indiceMaiorLinha = $i;
        }
    }

    // Retorna o número da linha (ex: Linha 1) e a soma dela
    $numeroLinhaExibicao = $indiceMaiorLinha + 1;
    return "A maior linha é a <strong>$numeroLinhaExibicao</strong> com a soma total de <strong>$maiorSoma</strong>.";
}

// 23 Exercício: Fatorial com Enquanto (while)
function calcularFatorial($n){
    $resultado = 1;
    $i = $n;

    while ($i > 1) {
        $resultado = $resultado * $i;
        $i--; 
    }

    return "O fatorial de $n é: " . $resultado;
}

// 24 Exercício: Dia da Semana (Escolha/Caso)
function verificarDiaSemana($numero) {
    switch ($numero) {
        case 1:
            return "Domingo";
        case 2:
            return "Segunda-feira";
        case 3:
            return "Terça-feira";
        case 4:
            return "Quarta-feira";
        case 5:
            return "Quinta-feira";
        case 6:
            return "Sexta-feira";
        case 7:
            return "Sábado";
        default:
            return "Número inválido! Digite de 1 a 7.";
    }
}

// 25 Exercício: Consulta de Produtos (Código 1 a 5)
function consultarProduto($codigo) {
    switch ($codigo) {
        case 1:
            return "Produto: Teclado Mecânico | Preço: R$ 250,00";
        case 2:
            return "Produto: Mouse Gamer | Preço: R$ 150,00";
        case 3:
            return "Produto: Monitor 24' | Preço: R$ 890,00";
        case 4:
            return "Produto: Headset Alpha | Preço: R$ 320,00";
        case 5:
            return "Produto: Webcam Full HD | Preço: R$ 210,00";
        default:
            return "Código inválido! Informe um valor de 1 a 5.";
    }
}

// 26 Exercício: Operações com Vetores 
function processarVetores($v1, $v2) {
    $soma = [];
    $mult = [];

    // Percorre 10 vezes (de 0 a 9)
    for ($i = 0; $i < 10; $i++) {
        $soma[$i] = $v1[$i] + $v2[$i];
        $mult[$i] = $v1[$i] * $v2[$i];
    }

    // Retorna os dois resultados de uma vez
    return [$soma, $mult];
}

// 27 Exercício: Soma de 1 até N (Enquanto)
function calcularSomaAteN($n) {
    $soma = 0;
    $i = 1;

    while ($i <= $n) {
        $soma = $soma + $i; // Adiciona o número atual ao total
        $i++;               // Passa para o próximo número
    }

    return "A soma de todos os números de 1 até $n$ é: " . $soma;
}


// 28 Exercício: Matriz 5x5 com números aleatórios
function gerarMatrizAleatoria() {
    $matriz = [];

    for ($linha = 0; $linha < 5; $linha++) {
        for ($coluna = 0; $coluna < 5; $coluna++) {
            // rand(min, max) gera o número aleatório
            $matriz[$linha][$coluna] = rand(1, 100);
        }
    }

    return $matriz;
}

// 29    Exercício: Somar todos os elementos de uma matriz 4x4
function somarMatriz4x4($matriz) {
    $soma = 0;

    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $soma = $soma + $matriz[$i][$j];
        }
    }

    return "A soma de todos os elementos da matriz é: " . $soma;
}
?>