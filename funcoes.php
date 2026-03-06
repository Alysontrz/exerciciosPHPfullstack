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

// 30  Exercício: Cálculo de Salário com Horas Extras (50%)
function calcularSalario($horas, $valorHora) {
    if ($horas <= 40) {
        // Cálculo simples se não ultrapassar 40h
        $salario = $horas * $valorHora;
    } else {
        // 40 horas normais + as horas excedentes com 50% de acréscimo
        $horasNormais = 40 * $valorHora;
        $horasExtras = ($horas - 40) * ($valorHora * 1.5);
        $salario = $horasNormais + $horasExtras;
    }

    return "O salário total é: R$ " . number_format($salario, 2, ',', '.');
}

// 31 Exercício: Matriz 3x3 - Valores acima da média geral
function matrizMediaGeral($matriz) {
    $soma = 0;
    
    // 1º Passo: Somar tudo para achar a média
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $soma = $soma + $matriz[$i][$j];
        }
    }
    
    $media = $soma / 9; // 3x3 tem 9 posições
    $resultado = "";

    // 2º Passo: Comparar cada valor com a média
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($matriz[$i][$j] > $media) {
                $resultado .= $matriz[$i][$j] . " ";
            }
        }
    }

    return "Média: " . number_format($media, 2) . " | Valores acima: " . $resultado;
}

// 32 Exercício: Média de 3 notas - Versão Básica
function verificarAprovacao($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) / 3;

    if ($media >= 7) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    return "Média: " . number_format($media, 1) . " | Situação: " . $situacao;
}

// 33 Exercício: Contar números pares em matriz 3x3
function contarParesMatriz($matriz) {
    $contador = 0;

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            // Verifica se o resto da divisão por 2 é zero
            if ($matriz[$i][$j] % 2 == 0) {
                $contador++;
            }
        }
    }

    return "A matriz possui " . $contador . " números pares.";
}

// Exercício 34: 15 primeiros termos de Fibonacci com Para (for)
function gerarFibonacci15() {
    $anterior = 0;
    $atual = 1;
    $resultado = $anterior . " " . $atual . " ";

    // Começamos o laço do 3º termo até o 15º
    for ($i = 3; $i <= 15; $i++) {
        $proximo = $anterior + $atual;
        $resultado .= $proximo . " ";
        
        // Atualiza os valores para a próxima volta
        $anterior = $atual;
        $atual = $proximo;
    }

    return $resultado;
}

// Exercício 35: Contar números negativos (Lógica Básica)
function contarNegativos($texto) {
    // Transforma o texto digitado em um array de números
    $vetor = explode(",", $texto);
    $contador = 0;

    foreach ($vetor as $num) {
        if (trim($num) < 0) {
            $contador++;
        }
    }

    return "Total de números negativos encontrados: " . $contador;
}

// Exercício 36: Cálculo de IMC e Classificação
function calcularIMC($peso, $altura) {
    // Cálculo do IMC
    $imc = $peso / ($altura * $altura);
    
    // Classificação básica
    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Peso normal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obesidade";
    }

    return "Seu IMC é " . number_format($imc, 2) . " - Classificação: " . $classificacao;
}

// Exercício 37: Múltiplos de 4 entre 1 e 50 (com para)
function listarMultiplosQuatro() {
    $resultado = "";

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 4 == 0) {
            $resultado .= $i . " "; // Vai acumulando os números encontrados
        }
    }

    return "Múltiplos de 4 encontrados: " . $resultado;
}

// Exercício 38: Soma da Diagonal Secundária (Matriz 3x3)
function somarDiagonalSecundaria($matriz) {
    $soma = 0;
    
    // A diagonal secundária em 3x3 são as posições: [0][2], [1][1] e [2][0]
    for ($i = 0; $i < 3; $i++) {
        $soma = $soma + $matriz[$i][2 - $i];
    }

    return "A soma da diagonal secundária é: " . $soma;
}

// Exercício 39: Contar nomes que começam com vogais
function contarVogaisNomes($nomes) {
    $contador = 0;
    $vogais = ['A', 'E', 'I', 'O', 'U'];

    foreach ($nomes as $nome) {
        // Remove espaços, pega a 1ª letra e coloca em maiúsculo
        $primeiraLetra = strtoupper(substr(trim($nome), 0, 1));

        if (in_array($primeiraLetra, $vogais)) {
            $contador++;
        }
    }

    return "Total de nomes que começam com vogais: " . $contador;
}

// Exercício 40: Validar senha com do...while (Repita)
function validarSenha1($digitada) {
    $correta = "1234";

    if ($digitada == $correta) {
        return "Acesso Garantido! Bem-vindo.";
    } else {
        return "Senha está incorreta! Tente novamente.";
    }
}

// Exercício 41: Contar quantas vezes o número 7 aparece
function contarSetes($texto) {
    // Transforma o texto em array
    $vetor = explode(",", $texto);
    $contador = 0;

    foreach ($vetor as $num) {
        // trim remove espaços e o == compara o valor
        if (trim($num) == 7) {
            $contador++;
        }
    }

    return "O número 7 apareceu " . $contador . " vez(es).";
}

// Exercício 42: Converter Notas em Conceitos (A, B, C, D, E)
function converterParaConceito($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) / 3;

    if ($media >= 9) {
        $conceito = "A";
    } elseif ($media >= 7) {
        $conceito = "B";
    } elseif ($media >= 5) {
        $conceito = "C";
    } elseif ($media >= 3) {
        $conceito = "D";
    } else {
        $conceito = "E";
    }

    return "Média: " . number_format($media, 1) . " - Conceito: " . $conceito;
}

// Exercício 43: Cálculo de IMC (Peso / Altura²)
function calcularIMC1($peso, $altura) {
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        $classe = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classe = "Peso normal";
    } elseif ($imc < 30) {
        $classe = "Sobrepeso";
    } else {
        $classe = "Obesidade";
    }

    return "IMC: " . number_format($imc, 2) . " - " . $classe;
}

// Exercício 44: Gerar vetor com quadrados de 1 a 10
function gerarQuadrados() {
    $vetor = [];

    for ($i = 1; $i <= 10; $i++) {
        $vetor[] = $i * $i; // Calcula o quadrado e adiciona ao vetor
    }

    // Transforma o array em uma linha de texto para exibir
    return "Quadrados de 1 a 10: " . implode(", ", $vetor);
}

// Exercício 45: Diferença entre Maior e Menor de 8 elementos
function calcularDiferencaExtremos($texto) {
    // Converte o texto da entrada em um array de números
    $vetor = explode(",", $texto);
    
    // Pega o maior e o menor valor da lista
    $maior = max($vetor);
    $menor = min($vetor);
    
    $diferenca = $maior - $menor;

    return "Maior: $maior | Menor: $menor | Diferença: $diferenca";
}

// Exercício 46: Somar números até digitar zero
function acumularSoma($numero, $somaAtual) {
    // A lógica de "Repita" no PHP Web:
    // Enquanto o número for diferente de 0, ele adiciona à soma.
    if ($numero != 0) {
        $novaSoma = $somaAtual + $numero;
        return ['status' => 'continuar', 'soma' => $novaSoma];
    } else {
        return ['status' => 'encerrar', 'soma' => $somaAtual];
    }
}

// Exercício 47: Filtrar múltiplos de 5
function filtrarMultiplosCinco($texto) {
    $vetorOriginal = explode(",", $texto);
    $apenasMultiplos = [];

    foreach ($vetorOriginal as $num) {
        $n = trim($num);
        // Verifica se é múltiplo de 5 e se não está vazio
        if ($n !== "" && $n % 5 == 0) {
            $apenasMultiplos[] = $n;
        }
    }

    if (empty($apenasMultiplos)) {
        return "Nenhum múltiplo de 5 foi encontrado.";
    }

    return "Números armazenados (múltiplos de 5): " . implode(", ", $apenasMultiplos);
}

// Exercício 48: Gerar tabuada de 1 a 10 (com para)
function gerarTabuada($numero) {
    if ($numero < 1 || $numero > 10) {
        return "Erro: Digite um valor entre 1 e 10.";
    }

    $resultado = "Tabuada do $numero:<br>";

    // O laço 'for' (para) começa em 1 e vai até 10
    for ($i = 1; $i <= 10; $i++) {
        $multiplicacao = $numero * $i;
        $resultado .= "$numero x $i = $multiplicacao <br>";
    }

    return $resultado;
}

// Exercício 49: Preencher vetor com os 20 primeiros múltiplos de 5
function gerarVinteMultiplos() {
    $vetor = [];

    // O laço roda 20 vezes
    for ($i = 1; $i <= 20; $i++) {
        $vetor[] = $i * 5; // Multiplica a posição por 5 e guarda
    }

    // Retorna a lista formatada como texto
    return "Vetor preenchido: " . implode(", ", $vetor);
}

// Exercício 50: Somar duas matrizes 3x3
function somarMatrizes($m1, $m2) {
    $mResultado = [];

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            // Soma o elemento correspondente de cada matriz
            $mResultado[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
        }
    }

    return $mResultado;
}

// Exercício 51: Encontrar o maior valor e sua posição
function encontrarMaiorEPosicao($texto) {
    $vetor = explode(",", $texto);
    
    $maior = $vetor[0]; // Começa assumindo que o primeiro é o maior
    $posicao = 0;

    foreach ($vetor as $indice => $valor) {
        $valor = trim($valor);
        if ($valor > $maior) {
            $maior = $valor;
            $posicao = $indice;
        }
    }

    return "O maior valor é **$maior** e está na posição **$posicao** (índice do vetor).";
}

// Exercício 52: Converter número em dia da semana
function descobrirDiaSemana($numero) {
    switch ($numero) {
        case 1: return "Domingo";
        case 2: return "Segunda-feira";
        case 3: return "Terça-feira";
        case 4: return "Quarta-feira";
        case 5: return "Quinta-feira";
        case 6: return "Sexta-feira";
        case 7: return "Sábado";
        default: return "Número inválido! Digite de 1 a 7.";
    }
}
?>