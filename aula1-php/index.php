<?php
    if(isset($_GET['nome'])){
        $nome=htmlspecialchars($_GET['nome']);
    }else{
        $nome=htmlspecialchars("Mundo!");
    }
    if(isset($_GET['cor'])){
        $cor=htmlspecialchars($_GET['cor']);
    }else{
        $cor=htmlspecialchars('white');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor;?>;
        }
    </style>
</head>
<body <?php if($nome=="Lucas"){
    echo "style='background: red; color: white'";
}?>>
    <h1>Olá <?php echo $nome; ?></h1>
    <a href="index.php?nome=Pedro&cor=pink">ir para Pedro</a><br>
    <a href="index.php?nome=Matheus&cor=yellow">ir para Matheus</a><br>
    <a href="index.php?nome=Lucas&cor=green">ir para Lucas</a>
</body>
</html>
