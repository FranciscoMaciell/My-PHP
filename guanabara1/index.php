<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="Meu_style.css">
</head>
<body>
    <h1 style="font-size: 35px;">Funções Aritimeticas</h1>
    <?php
        $v1=$_GET['x'];
        $v2=$_GET['y'];

        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é ".abs($v2);
        echo "<br>O valor de $v1 <sup>$v2</sup> é ".pow($v1, $v2);
        echo "<br>O valor da raiz de $v1 é: ".sqrt($v1);
        echo "<br>A parte inteira de $v2 é: ".intval($v2);
        echo "<br>O valor de $v1 em moeda e R$ ".number_format($v1, 2, ",", ".");
    ?>
</body>
</html>