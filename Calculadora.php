
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = floatval($_POST['peso']);
    $altura = floatval($_POST['altura']);

    if ($peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);
        $imc = round($imc, 2);

        echo "<h3>Seu IMC é: $imc</h3>";

        if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "<p>Classificação: Peso normal</p>";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "<p>Classificação: Sobrepeso</p>";
        } else {
            echo "<p>Classificação: Obesidade</p>";
        }
    } else {
        echo "<p>Por favor, insira valores válidos para peso e altura.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="post" action="">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.1" id="peso" name="peso" required>
        <br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" id="altura" name="altura" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
