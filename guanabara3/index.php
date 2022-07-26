<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: antiquewhite;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <h1>Operadores relacionais</h1>
    <?php
        /*
        echo "<p>Operador unario</p>"
        $opc=$_GET['o'];
        $a=$_GET['a'];
        $b=$_GET['b'];

        $r=($opc=='s')?$a+$b:$a*$b;

        echo "O valor de R é $r";
        */

        /*
        $a=3;
        $b="3";

        $r=($a==$b)?"sim":"não";
        $rr=($a===$b)?"sim":"não";

        echo "O valor de A é igual a B? $r";
        echo "<br>O valor de A é identico a B? $rr";
        */

        /*
        $nota1=$_GET['n1'];
        $nota2=$_GET['n2'];
        $res=($nota1+$nota2)/2;

        echo "A media entre as notas 1 e 2 é $res<br>";

        
        echo "A situação do aluno é ".(($res<6)?"reprovado":"aprovado");
        */

        $ano=$_GET['n1'];
        $atual=2022;
        $res=$atual-$ano;

        echo "A idade de quem nasceu em $ano é $res<br>";

        $tipo=($res>=18&&$res<65)?"Obrigatorio":"Não obrigatorio";

        echo "O voto dele é $tipo";

    ?>
</body>
</html>