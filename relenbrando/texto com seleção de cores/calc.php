<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
    <?php
        $text=isset($_GET['texto'])?$_GET['texto']:"Não informado";
        $tam=isset($_GET['tam'])?$_GET['tam']:"12pt";
        $cor=isset($_GET['cor'])?$_GET['cor']:"#000000";
    ?>

    <style>
        *{
            padding: 0px;
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background-color: lightgray;
        }

        h1{
            background-image: linear-gradient(to top, rgb(23, 15, 97), rgb(21, 40, 151));
            color: white;
            padding: 20px;
        }

        span.tex{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
            padding: 20px;
        }

        a{
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>PHP</h1>
    <?php
        echo "<span class='tex'>$text</span>"
    ?>
    <br><a href="index.html">Voltar</a>
</body>
</html>