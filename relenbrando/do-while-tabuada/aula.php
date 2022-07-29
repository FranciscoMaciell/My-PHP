<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>
<body>
    <?php
        $tab=isset($_GET['num'])?$_GET['num']:1;
        $mult=1;

        do{
            echo "$tab x $mult = " .($tab*$mult)."<br>";
            $mult++;
        }while($mult<=10)
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>
</html>