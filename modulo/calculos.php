<?php
/*************************************************************************************
 * Objetivo: Arquivo de funções matemáticas que poderá ser utilizado dentro do projeto
 * Autor: Jennifer Cristina
 * Data: 04/02/2022
 * Versão: 1.0
 ****************************************************/

 // Criando uma função para calcular as operações matemáticas  
 function operacaoMatematica($numero1, $numero2, $operacao){

//import do arquivo de configurações de variaveis e constantes
require_once('../modulo/config.php');

    // Declaração de variaveis locais da função
    $num1 = (double) $numero1;
    $num2 = (double) $numero2;
    $tipoCalculo = (string) $operacao;
    $result = (double) 0;

    switch($tipoCalculo) {
        case 'SOMAR':
            $result = $num1 + $num2;
            break;

        case 'SUBTRAIR':
            $result = $num1 - $num2;
            break;

        case 'MULTIPLICAR':
            $result = $num1 * $num2;
            break;

        case 'DIVIDIR':
            if($num2 == 0)
                echo(ERRO_MSG_DIVISAO_ZERO);
            else
                $result = $num1 / $num2;
            
            break;

        default:
            // Processamento caso não entre em nenhuma das opções
        }			

        // round() - permite limitar a qtde de casas decimais de um valor, além de arredondar o valor quando necessário
        $result = round($result, 2);

    return $result;
}

    // Criando uma função para calcular a média de um aluno
    function resultadoMedia($nota1, $nota2, $nota3, $nota4){

    // Declaração de variaveis locais da função
    $num1 = (double) $nota1;
    $num2 = (double) $nota2;
    $num3 = (double) $nota3;
    $num4 = (double) $nota4;
    $result = (double) 0;
    
    $result = ($num1 + $num2 + $num3 + $num4) / 4;
    
    return $result;
    
    }

    // Criando uma função para tabuada
    function resultadoTabuada($tabuada, $multiplicador){

    // Declaração de variaveis locais da função

    $tabuada = (int) $tabuada;
    $multiplicador = (int) $multiplicador;
    $contador = (int) 0;
    $result = (string) null;

    while ($contador <= $multiplicador){
        $soma = $tabuada * $contador;
        
        $result .= $tabuada . ' X ' . $contador . ' = ' . $soma .'<br>';

        $contador+=1;
    }

    return $result;

    }

    // Criando uma função para Pares e Impar

    // Declaração de variaveis locais da função
    function resultadoImparPar($numeroInicial, $numeroFinal, $somaResto){

     $numInicial = (int) $numeroInicial;       
     $numFinal = (int) $numeroFinal;
     $resultado = (string) null;
     $resto = (int) $somaResto;

        while ($numInicial <= $numFinal){

            if($numInicial % 2 == $resto){

                $resultado .= $numInicial . "<br>";

            }

            $numInicial+=1;

        }

        return $resultado;

    }

    // Criando uma função para quantidades de Pares e Impar
    function quantidadeImparPar($numeroInicial, $numeroFinal, $somaResto){

        $numInicial = (int) $numeroInicial;       
        $numFinal = (int) $numeroFinal;
        $resultado = (string) null;
        $resto = (int) $somaResto;
   
           while ($numInicial <= $numFinal){
   
               if($numInicial % 2 == $resto){
   
                   $resultado++;
   
               }
   
               $numInicial+=1;
   
           }
   
           return $resultado;

    }
    

?>