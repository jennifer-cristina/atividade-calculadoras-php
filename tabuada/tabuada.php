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
    if(isset($_POST['btnCalc'])){

        $tabuada = $_POST['txtTabuada'];
        $multiplicador = $_POST['txtMultiplicador'];

        // validação para tratamento de erro para caixa vazia
        if($_POST['txtTabuada'] == '' || $_POST['txtMultiplicador'] == ''){

            echo(ERRO_MSG_CAIXA_VAZIA);

        }else{
            // validação para tratamento de erro para dados incorreto
            if(!is_numeric($tabuada) || !is_numeric(($multiplicador)))

                echo(ERRO_MSG_CARACTER_INVALIDO_TEXTO);

            else{
                // validação para tratamento de erro para tabuada do zero
                if($tabuada == 0){

                    echo(ERRO_MSG_TABUADA_ZERO);

                }else
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
    <title>Tabuada</title>
    <style>
        #resultado{
            width: 100px;
            height: 300px;
            border: solid 1px #000000;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="conteudo">
        <div id="titulo">
            Tabuada
        </div>

        <div id="form">
            <form name="formTabuada" method="post" action="#">
                <div id="formulario">
                <label>Tabuada: </label>
                <input type="text" name="txtTabuada">
                <label>Contador: </label>
                <input type="text" name="txtMultiplicador">
                </div>
                <input type="submit" name="btnCalc" value ="Calcular" >

                <div id="resultado">
                    <?php echo($resultado)?>
                </div>
            </form>
        </div>
    </div>
</body>
</html>