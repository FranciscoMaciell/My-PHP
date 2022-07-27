<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso de php</title>
    <style>
        body{
            background-color: black;
        }

        main{
            background-color: antiquewhite;
            width: 700px;
            height: auto;
            padding: 20px;
        }
    </style>
</head>
<body>
<main>
    <h1><i>Pegando valores</i></h1>
        <form action="index.php" method="get">
            <p>
                <label for="ia">Valor1</label>
                <input type="number" name="a" id="ia" step="0.1" require>
            </p>
            <p>
                <label for="ib">Valor2</label>
                <input type="number" name="b" id="ib" step="0.1" require>
            </p>
            <p>
                <label for="iop">Opção</label>
                <input type="text" name="op" id="iop" size="4" require>
            </p>
            <p>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </p>
        </form>
    
        <?php
            $val1=$_GET['a'];
            $val2=$_GET['b'];
            $tipo=$_GET['op'];

            $res=($tipo=='s')?$val1-$val2:$val1*$val2;

            echo "O resultado é $res";
        ?>
</main>
</body>
</html>