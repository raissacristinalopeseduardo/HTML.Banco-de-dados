
<?php

    $peso = $_POST['peso'];

    $altura = $_POST['altura'];

    $altura = bcpow($altura, 2, 2);

    $massa = $peso / $altura;

    $massa = round($massa);

if($massa < 20) {

    $mensagem = "Você está magro.";

}elseif(($massa > 20) and ($massa < 25)) {

    $mensagem = "Você está no peso ideal.";

}else{

    $mensagem = "Você está acima do peso.";

}

echo "Sua massa corporal é: <b>$massa</b> <br>";

echo "Estado atual: <b>$mensagem</b>"

?>
