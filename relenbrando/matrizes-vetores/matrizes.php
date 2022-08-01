<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>Matrizes</h1>
    <pre>
    <?php
        /*
        $m=array(array(6, 4),
                 array(4, 9),
                 array(3, 2));

        print_r($m);

        $m[0][1]=3;
        print_r($m);
        

        $v=array("A", "J", "M", "X", "K");
        print_r($v);
        */

        $v=array("A", "J", "M", "X", "K");
        var_dump($v);

        array_push($v, 7);    // Iserir um elemento no final do vetor
        array_pop($v);        // Remover um elemento do final do vetor

        array_unshift($v, 7); // Inseri elementos no inicio do vetor
        array_shift($v);      // Removi um elemento do inicio do vetor

        array_push($v, "O");
        var_dump($v);

        echo count($v);
    ?>
    </pre>
</body>
</html>