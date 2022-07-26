<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Raiz</title>
    <style>
        body{
            font-size: 20px;
        }
    </style>
</head>
<body>
<div>
    <?php
        $valor=$_GET['v'];
        $rq=sqrt($valor);

        echo "O valor enviado foi $valor<br>";
        echo "O valor da raiz quadrada de $valor é ".number_format($rq, 2);
    ?>

    <br>
    <a href="index.php">voltar</a>
</div>
</body>
</html>