<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cal.css">
    <title>Calculadora de IMC</title>
</head>
<body>
    <div class="box">
            <fieldset> 
                <form method="post" action="" class="formulario">
                    <legend><h1>Calculadora IMC</h1></legend>

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome"  class="inputUser" required>
                    <br><br>

                    <label for="peso">Peso (kg):</label>
                    <input type="number" step="0.1" id="peso" name="peso"  class="inputUser" required>
                    <br><br>

                    <label for="altura">Altura (m):</label>
                    <input type="number" step="0.01" id="altura" name="altura"  class="inputUser" required>
                    <br><br>
                    
                    <button type="submit" class="btn">Calcular</button>
                </form>
            </fieldset>             
    </div>
    
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);
    $nome = htmlspecialchars($_POST['nome']);

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);
        $imc = round($imc, 2);

        echo "<h3>Seu IMC é: $imc</h3>";

        if ($imc < 18.5) {
            echo "<p>Classificação: $nome você está Abaixo do peso</p>";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "<p>Classificação: $nome você está Peso normal</p>";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "<p>Classificação: $nome você está Sobrepeso</p>";
        } else {
            echo "<p>Classificação: $nome você está Obesidade</p>";
        }
    } else {
        echo "<p>Por favor, $nome insira valores válidos para peso e altura.</p>";
    }
}
?>
