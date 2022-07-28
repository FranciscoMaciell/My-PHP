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
        $area=isset($_GET['est'])?$_GET['est']:"Estado não encontrado";

        switch($area){
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
                echo "Região Norte";
                break;
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
            case 13:
            case 14:
            case 15:
            case 16:
                echo "Região Nordeste";
                break;
            case 17:
            case 18:
            case 19:
                echo "Região Centro-Oeste";
                break;
            case 20:
            case 21:
            case 22:
            case 23:
                echo "Região Sudeste";
                break;
            case 24:
            case 25:
            case 26:
                echo "Região Sul";
                break;
            default:
                echo "Opção não encontrada";
        }
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>