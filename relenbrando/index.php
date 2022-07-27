<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso de php</title>
    <style>
        body{
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
    <h1>Pegando valores</h1>
    <form action="index.php" method="get">
        <p>
            <label for="ia">valor1</label>
            <input type="number" name="a" id="ia">
        </p>
        <p>
            <label for="ib">valor2</label>
            <input type="number" name="b" id="ib">
        </p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </p>
    </form>

    <?php
        $valor1=$_GET['a'];
        $valor2=$_GET['b'];

        echo "A soma dos valores é: ".($valor1+$valor2);
        echo "<br>O valor de $valor1 <sup>$valor2</sup> e " . pow($valor1, $valor2);
        echo "<br>A raiz de $valor1 é " . sqrt($valor1);
        echo "O valor arredondado de $valor2 é: " . round($valor2);
    ?>
</body>
</html>