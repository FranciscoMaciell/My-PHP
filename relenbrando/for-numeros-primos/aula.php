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
        $num=isset($_GET['num'])?$_GET['num']:1;
        $cnt=0;
        echo "<h1>Analisando o $num...</h1>";

        echo "Os multiplos são ";
        for($i=$num; $i>=1; $i--){
            $pr=$num/$i;
            if(is_integer($pr)){
                $cnt++;
                echo $pr." ";
            }
        }
        echo "<br>O numero de multiplos é ".$cnt;
        if($cnt==2){
            echo "<br>O numero $num é primo";
        }
    ?>
    <br><a href="index.html">Voltar</a>
</body>
</html>