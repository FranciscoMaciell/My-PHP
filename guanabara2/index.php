<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <link rel="stylesheet" href="Meu_style.css">
</head>
<body>
    <h2>Atividade Operadores</h2>
    <?php
        /*
        $preco=$_GET['p'];

        echo "O preço recebido foi R$ ".number_format($preco, 2);

        $preco+=($preco*10/100);

        echo "<br>O valor do produto com mais 10% é: " .number_format($preco, 2);
        */

        /*
        $ano=$_GET['a'];

        echo "O ano digitado foi $ano";

        $ano--;

        echo "<br>O ano atualizado é $ano";
        */

        /*
        $a=3;
        $b=&$a;
        $b+=5;

        echo "A variavel A vale $a";
        echo "<br>A variavel B vale $b";
        */

        $x="abc";
        $$x="def";

        echo "O conteudo da variave x é $x";
        echo "<br>A variavel ABC recebeu o valor $abc";
    ?>

</body>
</html>




















