<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatorial</title>
</head>
<body>
    <?php
        $v=isset($_GET['fat'])?$_GET['fat']:1;
        $c=$v;
        $fat=1;
        do{
            $fat*=$c;
            $c--;
        }while($c>=1);  
        echo "O fatorial é $fat";
    ?>
</body>
</html>