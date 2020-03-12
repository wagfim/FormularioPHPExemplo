<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fundamentos de PHP</title>
    <link rel="stylesheet" href="css/sakura.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body>
    <?php
        include_once("questoes/questao1.php");
        include_once("questoes/questao2.php");
        include_once("questoes/questao3.php");
        include_once("questoes/questao4.php");
        //include_once("questoes/questao5.php");
        include_once("questoes/questao6.php");
        include_once("questoes/questao7.php");
        include_once("questoes/questao8.php");
    ?>

    <a href="index.php">
        <h1>Fundamentos de PHP</h1>
        <h2>ADS - 2º Ano</h2>
        <h2>Wagner Bonfim</h2>
    </a>

    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao1">
        <h6>Questão 1 - Some Dois Valores</h6>
        <form action="index.php#questao1" method="get">
            <label for="v1Soma">Valor </label>
            <input type="text" required class="input-numero" name="v1Soma" id="v1Soma">
            <label for="v2Soma">Valor </label>
            <input type="text" required class="input-numero" name="v2Soma" id="v2Soma">
            <button type="submit">Somar</button>
        </form>
        <div class="resultado">
            <div class="box-texto">Resultado:</div>
            <div class="box-resultado">
                <?php
                if (isset($_GET['v1Soma'])) {
                    $resultado = somaDoisValores($_GET['v1Soma'], $_GET['v2Soma']);
                    echo $resultado;
                }
            ?>
            </div>
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao2">
        <h6>Questão 2: Média de 4 valores</h6>
        <form action="index.php#questao2" method="get">
            <label for="v1Media">Valor 1</label>
            <input type="text" required class="input-numero" name="v1Media" id="v1Media">
            <label for="v3Media">Valor 3</label>
            <input type="text" required class="input-numero" name="v3Media" id="v3Media">
            <br>
            <label for="v2Media">Valor 2</label>
            <input type="text" required class="input-numero" name="v2Media" id="v2Media">
            <label for="v4Media">Valor 4</label>
            <input type="text" required class="input-numero" name="v4Media" id="v4Media">
            <button type="submit">Calcular</button>
        </form>
        <div class="resultado">
            <div class="box-texto">Resultado:</div>
            <div class="box-resultado">
                <?php
                if (isset($_GET['v1Media'])) {
                    $resultado = calculaMedia($_GET['v1Media'], $_GET['v2Media'], $_GET['v3Media'], $_GET['v4Media']);
                    echo $resultado;
                }
            ?>
            </div>
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao3">
        <h6>Questão 3 - Converta Quilômetros para Metros</h6>
        <form action="index.php#questao3" method="get">
            <label for="quilometros">Valor em quilômetros: </label>
            <input type="text" required class="input-numero" name="quilometros" id="quilometros">
            <button type="submit">Calcular</button>
        </form>
        <div class="resultado">
            <div class="box-texto">Resultado:</div>
            <div class="box-resultado">
                <?php
                if (isset($_GET['quilometros'])) {
                    $resultado = converteKmParaMetros($_GET['quilometros']);
                    echo $resultado;
                }
            ?>
            </div>
            metros
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao4">
        <h6>Questão 4 - Calcule média de um aluno</h6>
        <form action="index.php#questao4" method="get">
            <label for="nomeAluno">Nome do Aluno: </label>
            <input type="text" required name="nomeAluno" id="nomeAluno">
            <br>
            <label for="nota1">Nota 1</label>
            <input type="text" required class="input-numero" name="nota1" id="nota1">
            <label for="nota2">Nota 2</label>
            <input type="text" required class="input-numero" name="nota2" id="nota2">
            <label for="nota3">Nota 3</label>
            <input type="text" required class="input-numero" name="nota3" id="nota3">
            <button type="submit">Calcular</button>
        </form>
        <div class="resultado">
            <div class="box-texto">Resultado:</div>
            <div class="box-resultado">
                <?php
                if (isset($_GET['nota1'])) {
                    $media = calculaMediaAluno($_GET['nota1'], $_GET['nota2'], $_GET['nota3']);
                    echo "{$_GET['nomeAluno']}, sua média é {$media}";
                }
            ?>
            </div>
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao5">
        <h6>Questão 5 (automático) - Informe se o aluno da questão 4 foi aprovado</h6>
        <?php
            if (isset($_GET['nota1'])) {
                echo "Aluno: {$_GET['nomeAluno']}<br>";
                echo "Média: {$media}<br>";
                echo "Status: ";
                if ($media >= 7.0) {
                    echo "Aprovado ✔️";
                } else if ($media >= 5.0 && $media < 7.0) {
                    echo "Recuperação ❗";
                } else {
                    echo "Reprovado ❌";
                }
            }
        ?>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao6">
        <h6>Questão 6: Fatorial de um numero</h6>
        <form action="index.php#questao6" method="get">
            <label for="numParaFatorial">Numero: </label>
            <input type="text" required class="input-numero" name="numParaFatorial" id="numParaFatorial">
            <button type="submit">Calcular</button>
        </form>
        <div class="resultado">
            <div class="box-texto">Resultado:</div>
            <div class="box-resultado">
                <?php
                if (isset($_GET['numParaFatorial'])) {
                    $resultado = calculaFatorial($_GET['numParaFatorial']);
                    echo $resultado;
                }
            ?>
            </div>
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao7">
        <h6>Questão 7: Conte de 1 até o número informado</h6>
        <form action="index.php#questao7" method="get">
            <label for="numeroContagem">Numero: </label>
            <input type="text" required class="input-numero" name="numeroContagem" id="numeroContagem">
            <button type="submit">Contar</button>
        </form>
        <div class="resultado">
            <div class="box-texto">Resultado:</div>
            <div class="box-resultado">
                <?php
                    if (isset($_GET['numeroContagem'])) {
                        contarDeUmAte($_GET['numeroContagem']);
                    }
                ?>
            </div>
        </div>
    </div>
    <hr>
    <!-- ------------------------------------------------------------------------------------------------ -->
    <div id="questao8">
        <h6>Questão 8: Soma de um intervalo fechado</h6>
        <form action="index.php#questao8" method="get">
            <label for="v1Intervalo">Valor </label>
            <input type="text" required class="input-numero" name="v1Intervalo" id="v1Intervalo">
            <label for="v2Intervalo">Valor </label>
            <input type="text" required class="input-numero" name="v2Intervalo" id="v2Intervalo">
            <button type="submit">Somar</button>
        </form>
        <div class="resultado">
            <div class="box-texto">Resultado:</div>
            <div class="box-resultado">
                <?php
                if (isset($_GET['v1Intervalo'])) {
                    $resultado = somarIntevalo($_GET['v1Intervalo'], $_GET['v2Intervalo']);
                    echo $resultado;
                }
            ?>
            </div>
        </div>
    </div>
</body>

</html>