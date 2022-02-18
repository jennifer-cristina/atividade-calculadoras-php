<?php
//permite fazer a importação de arquivos no PHP. 
//Utilizando a opção com _once, o servidor realiza uma restrição 
//para importar somente uma vez o arquivo (melhor opção).

//import do arquivo de funções para calculos matemáticos
require_once('../modulo/calculos.php');
//import do arquivo de configurações de variaveis e constantes
require_once('../modulo/config.php');

$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;
$opcao = (string) null;

if (isset($_POST['btncalc'])) {

	$valor1 = $_POST['txtn1'];
	$valor2 = $_POST['txtn2'];

	// validação de tratamento de erro para caixa vazia
	if ($_POST['txtn1'] == '' || $_POST['txtn2'] == '')

		echo (ERRO_MSG_CAIXA_VAZIA);
	else {
		// validação de tratamento de erro para rdo sem escolha
		if (!isset($_POST['rdocalc']))

			echo (ERRO_MSG_OPERACAO_CALCULO);

		else {

			// validação para tratamento de erro para dados incorreto

			if (!is_numeric($valor1) || !is_numeric($valor2))

				echo (ERRO_MSG_CARACTER_INVALIDO_TEXTO);

			else {

				// Apenas podemos receber o valor do rdo quando ele existir
				$opcao = strtoupper($_POST['rdocalc']);

				// Chamada para a função que vai realizar os calculos matemáticos
				$resultado = operacaoMatematica($valor1, $valor2, $opcao);
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
	<title>Calculadora - Simples</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="../style.css">
	<script src="../main.js" defer></script>
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
							<li><a href="#">Calculadora simples</a></li>
							<li><a href="../formulario-media/media.php">Calculadora Média</a></li>
							<li><a href="../tabuada/tabuada.php">Tabuada</a></li>
							<li><a href="../pares-impar/pares-impar.php">Pares e impar</a></li>
						</ul>
					</nav>
				</div>
				<div id="container-conteudo">
					<div id="form">
						<form id="container-formulario" name="frm-calculadora" method="POST" action="calculadora_simples.php">
							<div id="container-configuracoes">
								<div id="container-input">
									<div class="informacao"> <label>Valor 1:</label> <input id="input-informacao" type="text" name="txtn1" autocomplete="off" value="<?= $valor1; ?>"> </div>
									<div class="informacao"> <label>Valor 2:</label><input id="input-informacao" type="text" name="txtn2" autocomplete="off" value="<?= $valor2; ?>"> </div>

								</div>
								<div id="container-opcoes">
									<input type="radio" name="rdocalc" value="somar" <?= $opcao == 'SOMAR' ? 'checked' : null; ?>> Somar <br>
									<input type="radio" name="rdocalc" value="subtrair" <?= $opcao == 'SUBTRAIR' ? 'checked' : null; ?>> Subtrair <br>
									<input type="radio" name="rdocalc" value="multiplicar" <?= $opcao == 'MULTIPLICAR' ? 'checked' : null; ?>> Multiplicar <br>
									<input type="radio" name="rdocalc" value="dividir" <?= $opcao == 'DIVIDIR' ? 'checked' : null; ?>> Dividir <br>
								</div>
							</div>
							<input id="botao-calculadora-simples" type="submit" name="btncalc" value="Calcular">
							<div id="resultado">
								O resultado é: <?= $resultado; ?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</main>
</body>

</html>