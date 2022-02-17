<?php
/****************************************************************************
 * Objetivo: Arquivo responsável por reunir todas as variáveis e constantes 
 *                     que serão utilizadas no projeto.
 * Autor: Jennifer Cristina
 * Data: 04/02/2022
 * Versão: 1.0
 ******************************************************************************/

// Constantes do projeto
// Modo 01 de criar uma constante
define('ERRO_MSG_CAIXA_VAZIA', '<script> alert("Preencha todos os campos para que possa realizar o calculo!"); </script>');

// Modo 02 de criar uma constante
const ERRO_MSG_OPERACAO_CALCULO = '<script> alert("Por favor escolher uma operação matemática válida!"); </script>';
const ERRO_MSG_CARACTER_INVALIDO_TEXTO = '<script> alert("Não é possível realizar calculos de dados não númericos!"); </script>';
const ERRO_MSG_DIVISAO_ZERO = '<script> alert("Não é possível realizar a divisão onde o valor 2 é igual a 0!"); </script>';
const ERRO_MSG_TABUADA_ZERO = '<script> alert("Não é possível realizar a tabuada do 0!") </script>';
const ERRO_MSG_IMPAR_PAR_NUM_IGUAIS = '<script> alert("Não é possível realizar o calculo, pois os números inseridos estão iguais!") </script>';
const ERRO_MSG_IMPAR_PAR_NUM_MAIOR_NUM_FINAL = '<script> alert("Não é possível realizar o calculo, pois o número inicial é maior que o número Final, por favor inserir um número menor.") </script>';

?>