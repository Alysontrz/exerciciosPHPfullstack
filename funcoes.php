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
        $media = ($primeiro, $segundo, $terceiro, $quarto, $quinto)/5;
        return "A media é: $media";
    }//fim do metodo
?>