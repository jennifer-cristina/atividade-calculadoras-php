<?php

//import do arquivo de funções para calculos matemáticos
require_once('../modulo/calculos.php');
//import do arquivo de configurações de variaveis e constantes
require_once('../modulo/config.php');

// Criando variáveis
$numeroInicial = (int) 0;
$numeroFinal = (int) 0;
$sequenciaPar = (int) 0;
$sequenciaImpar = (int) 0;
$sequenciaNumeros = (int) 0;
$resultadoPar = (string) null;
$resultadoImpar = (string) null;
$quantidadePares = (int) 0;
$quantidadeImpares = (int) 0;


// Inserindo sequencia de número no selected inicial
for ($contador = 0; $contador < 501; $contador++) {
    $sequenciaPar .= '<option value="' . $contador . '">' . $contador . '</option>';
}

// Inserindo sequencia de número no selected final
for ($contador = 100; $contador < 1001; $contador++) {
    $sequenciaImpar .= '<option value="' . $contador . '">' . $contador . '</option>';
}

// Chamando o botão executando 
if (isset($_POST['btnCalc'])) {

    $numeroInicial = $_POST['sltInicial'];
    $numeroFinal = $_POST['sltFinal'];

    // Validação para tratamento de erro para caixa vazia
    if (!is_numeric($numeroInicial) || !is_numeric($numeroFinal)) {

        echo (ERRO_MSG_CAIXA_VAZIA);
    } else {

        // Validação para tratamento de erro para o número Inicial não ser Maior que a do final
        if ($numeroInicial > $numeroFinal) {

            echo (ERRO_MSG_IMPAR_PAR_NUM_MAIOR_NUM_FINAL);
        } else {

            // Validação para tratamento de erro para as caixas não conterem número iguais
            if ($numeroInicial == $numeroFinal) {

                echo (ERRO_MSG_IMPAR_PAR_NUM_IGUAIS);
            } else {

                // exibir no option as sequencias de numeros
                $resultadoPar = resultadoImparPar($numeroInicial, $numeroFinal, 0);
                $resultadoImpar = resultadoImparPar($numeroInicial, $numeroFinal, 1);

                // quantidade de pares e impares
                $quantidadePares = quantidadeImparPar($numeroInicial, $numeroFinal, 0);
                $quantidadeImpares = quantidadeImparPar($numeroInicial, $numeroFinal, 1);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../main.js" defer></script>
    <title>Pares e Impar</title>
</head>

<body>
    <main id="container">
        <div id="lousa">
            <div id="interior-lousa">
                <div id="container-menu">
                    <input type="checkbox" id="checkbox-menu">

                    <label for="checkbox-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>

                    <nav id="nav">
                        <ul id="menu">
                            <li><a href="../calculadora-simples-php/calculadora_simples.php">Calculadora simples</a></li>
                            <li><a href="../formulario-media/media.php">Calculadora Média</a></li>
                            <li><a href="../tabuada/tabuada.php">Tabuada</a></li>
                            <li></li><a href="#">Pares e impar</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="container-conteudo">
                    <div id="form">
                        <form name="formParesImpar" method="POST" action="#">
                            <div id="container-configuracao">
                                <div id="formulario">
                                    <div id="container-informacao">
                                    <label>N° Inicial </label>
                                    <select class="select-informacao" name="sltInicial">
                                        <option>Por favor, selecione um número</option>
                                        <?= $sequenciaPar ?>
                                    </select>
                                    </div>
                                    <div id="container-informacao">
                                    <label>N° Final </label>
                                    <select  class="select-informacao"name="sltFinal">
                                        <option>Por favor, selecione um número</option>
                                        <?= $sequenciaImpar ?>
                                    </select>
                                    </div>
                                    <div >
                                    <input id="botao-tabuada" type="submit" name="btnCalc" value="Calcular">
                                    </div>
                                </div>

                                <div id="resultado">
                                    <div id="container-resultado-par">
                                    <label>N° Pares</label>
                                    <div class="result"><?= $resultadoPar ?></div>
                                    <label>Qtde de Pares <?= $quantidadePares ?></label>
                                    </div>
                                    <div id="container-resultado-impar">
                                    <label>N° Impares</label>
                                    <div class="result"><?= $resultadoImpar ?></div>
                                    <label>Qtde de Impares <?= $quantidadeImpares ?></label>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
</body>

</html>