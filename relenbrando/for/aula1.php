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

        for($i=1; $i<=10; $i++){
            echo "$num x $i = ".($num*$i)."<br>";
        }
    ?>
    <br>
    <a href="aula.php">Voltar</a>
</body>
</html>