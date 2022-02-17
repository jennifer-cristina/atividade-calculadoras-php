<?php

//import do arquivo de funções para calculos matemáticos
require_once('../modulo/calculos.php');
//import do arquivo de configurações de variaveis e constantes
require_once('../modulo/config.php');

//Criando as variaveis
//multiplicando
$tabuada = (int) 0;
//multiplicador
$multiplicador = (int) 0;
//contador
$contador = (int) 0;
//resultado
$resultado = (string) null;

// Ação do botão calcular
if (isset($_POST['btnCalc'])) {

    $tabuada = $_POST['txtTabuada'];
    $multiplicador = $_POST['txtMultiplicador'];

    // validação para tratamento de erro para caixa vazia
    if ($_POST['txtTabuada'] == '' || $_POST['txtMultiplicador'] == '') {

        echo (ERRO_MSG_CAIXA_VAZIA);
    } else {
        // validação para tratamento de erro para dados incorreto
        if (!is_numeric($tabuada) || !is_numeric(($multiplicador)))

            echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);

        else {
            // validação para tratamento de erro para tabuada do zero
            if ($tabuada == 0) {

                echo (ERRO_MSG_TABUADA_ZERO);
            } else
                // Chamada para a função que vai realizar a conta da tabuada
                $resultado = resultadoTabuada($tabuada, $multiplicador);
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
    <title>Tabuada</title>
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
                            <li><a href="calculadora-simples-php/calculadora_simples.php">Calculadora simples</a></li>
                            <li><a href="formulario-media/media.php">Calculadora Média</a></li>
                            <li><a href="tabuada/tabuada.php">Tabuada</a></li>
                            <li></li><a href="pares-impar/pares-impar.php">Pares e impar</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="conteudo">
                    <div id="form">
                        <form name="formTabuada" method="post" action="#">
                            <div id="container-configuracao">
                                <div id="container-informacao">
                                    <div id="formulario">
                                        <label>Tabuada: </label>
                                        <input id="input-informacao" autocomplete="off" type="text" name="txtTabuada">
                                    </div>
                                    <div id="formulario">
                                        <label>Contador: </label>
                                        <input id="input-informacao" autocomplete="off" type="text" name="txtMultiplicador">
                                    </div>
                                    <input id="botao-tabuada" type="submit" name="btnCalc" value="Calcular">
                                </div>
                                <div id="resultado">
                                    <?php echo ($resultado) ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
</body>

</html>