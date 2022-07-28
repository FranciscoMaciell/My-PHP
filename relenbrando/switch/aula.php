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
        $op=isset($_GET['tipo']);

        switch($op){
            case 1:
            case 2:
            case 3:
                echo "O tipo 1 foi selecionado";
                break;
            case 4:
            case 5:
                echo "O tipo 2 foi selecionado";
                break;
            default:
                echo "O tipo 3 foi selecionado";
                break;
        }
    ?>
</body>
</html>