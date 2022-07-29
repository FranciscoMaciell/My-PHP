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
        $vini=isset($_GET['ini'])?$_GET['ini']:0;
        $vfin=isset($_GET['vfi'])?$_GET['vfi']:0;
        $inc=isset($_GET['inc'])?$_GET['inc']:0;

        if($vini>$vfin){
            while($vini>=$vfin){
                echo $vini." ";
                $vini-=$inc;
            }
        }else if($vini<$vfin){
            while($vini<=$vfin){
                echo $vini." ";
                $vini+=$inc;
            }
        }else
            echo "Opção invalida";
    ?>
    <a href="index.html">Voltar</a>
</body>
</html>