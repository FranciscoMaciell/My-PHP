<?php
/* $_GET */
    if(isset($_GET['nome'])){
        $nome=htmlspecialchars($_GET['nome']);
    }else{
        $nome="Mundo";
    }
    if(isset($_GET['cor'])){
        $cor=htmlspecialchars($_GET['cor']);
    }else{
        $cor='white';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>

</head>
<body>
    <h1>Olá <?php echo $nome; ?></h1>

    <a href="index.php?nome=Pedro&cor=pink">Ir para Pedro</a><br>
    <a href="index.php?nome=Matheus&cor=yellow">Ir para Matheus</a><br>
    <a href="index.php?nome=Lucas&cor=green">Ir para Lucas</a>
</body>
</html>