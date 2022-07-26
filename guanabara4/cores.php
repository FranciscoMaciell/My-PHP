<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php
        $txt=isset($_GET["t"])?$_GET["t"]:["Nao declarada"];
        $tam=isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor=isset($_GET["cor"])?$_GET["cor"]:"black";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
<?php
        echo "<span class='texto'>$txt</span>";
    ?>
    <br><a href="index.html">Voltar</a>
</div>
</body>
</html>