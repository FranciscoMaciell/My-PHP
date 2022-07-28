<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $tipo=isset($_GET['op'])?$_GET['op']:1;
        $num=isset($_GET['num'])?$_GET['num']:1;

        switch($tipo){
            case 1:
                echo "O dobro de $num é ".($num*2);
                break;
            case 2:
                echo "A raiz de $num é ".sqrt($num);
                break;
            case 3:
                echo "O cubo de $num é ".($num*$num*$num);
                break;
        }
    ?>
    <br><a href="index.html">Voltar</a>
</body>
</html>