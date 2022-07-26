<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULAR IDADE</title>
</head>
<body>
    <?php
        $name=isset($_GET['nome'])?$_GET['nome']:["Nao informado"];
        $anos=$_GET['ano']?$_GET['ano']:0;
        $sexy=$_GET['sexo']?$_GET['sexo']:["sexo nao informado"];
        $idade=date("Y")-$anos;

        echo "O individuo de nome $name, nascido em $anos do sexo $sexy tem aproximadamente $idade";
    ?>
    <br><a href="index.html">Voltar</a>
</body>
</html>