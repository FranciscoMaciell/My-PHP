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
        $dia=isset($_GET['dia'])?$_GET['dia']:1;

        switch($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia de aula";
                break;
            case 8:
            case 7:
                echo "Opa não tem aula";
        }
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>