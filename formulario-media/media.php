<?php

//import do arquivo de funções para calculos matemáticos
require_once('../modulo/calculos.php');
//import do arquivo de configurações de variaveis e constantes
require_once('../modulo/config.php');

$nota1 = (float) 0;
$nota2 = (float) 0;
$nota3 = (float) 0;
$nota4 = (float) 0;
$media = (float) 0;

// Validação para tratar se o botão foi clicado

if (isset($_POST['btnCalc'])) {
    // Recebendo dados utilizando o POST do formulário

    $nota1 = $_POST['txtn1'];
    $nota2 = $_POST['txtn2'];
    $nota3 = $_POST['txtn3'];
    $nota4 = $_POST['txtn4'];

    // Validação para tratamento de caixa vazia
    if ($_POST['txtn1'] == "" || $_POST['txtn2'] == "" || $_POST['txtn3'] == "" || $_POST['txtn4'] == "") {
        echo (ERRO_MSG_CAIXA_VAZIA);
    } else {

        // Validação para tratamento de valores invalidos
        if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4)) {
            echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);
        } else {
            // Realizando o calculo da Média
            $media = resultadoMedia($nota1, $nota2, $nota3, $nota4);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Média</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../main.js" defer></script>
    <meta charset="utf-8">
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
                            <li><a href="#">Calculadora Média</a></li>
                            <li><a href="../tabuada/tabuada.php">Tabuada</a></li>
                            <li><a href="../pares-impar/pares-impar.php">Pares e impar</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="container-conteudo">
                    <div id="form">
                        <form name="frmMedia" method="post" action="media.php">
                            <div id="container-configuracoes">
                                <div id="container-informacao">
                                    <div class="informacao">
                                        <label>Nota 1:</label>
                                        <input id="input-informacao" autocomplete="off" type="text" name="txtn1" value="<?php echo ($nota1); ?>">
                                    </div>

                                    <div class="informacao">
                                        <label>Nota 2:</label>
                                        <input id="input-informacao" autocomplete="off" type="text" name="txtn2" value="<?php echo ($nota2); ?>">
                                    </div>

                                    <div class="informacao">
                                        <label>Nota 3:</label>
                                        <input id="input-informacao" autocomplete="off" type="text" name="txtn3" value="<?php echo ($nota3); ?>">
                                    </div>

                                    <div class="informacao">
                                        <label>Nota 4:</label>
                                        <input id="input-informacao" autocomplete="off" type="text" name="txtn4" value="<?php echo ($nota4); ?>">
                                    </div>
                                </div>

                                <div id="container-resultado">
                                    <div id="container-botoes">
                                        <input id="botao-formulario-media" type="submit" name="btnCalc" value="Calcular">
                                        <div id="botao-reset">
                                            <a href="media.php">
                                                Novo Cálculo
                                            </a>
                                        </div>
                                    </div>
                                    <div id="resultado">
                                        A média é: <?php echo ($media); ?>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>


        </div>


</body>

</html>