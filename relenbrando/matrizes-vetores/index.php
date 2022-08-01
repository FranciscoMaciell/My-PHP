<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetores</title>
</head>
<body>
    <?php
        /*
        $c=range(5,20,2);
        print_r($c);
        

        // estrutura foreach

        $c=range(5,20,2);
        foreach($c as $valor){
            echo $valor. " ";
        }

        //chaves associativas

        $cad=array("nome"=>"Ana",
                    "idade"=>23,
                    "peso"=>78.5);

        foreach($cad as $info=>$info1){
            echo "O campo $info possui o conteudo $info1<br>";
        }
        */
        $id=array("nome"=>"Ana José", "idade"=>23, "Data de nascimento"=>1987);

        foreach($id as $info1=>$info2){
            echo "$info1 e $info2 <br>";
        }
        $id["fuma"]="True";

        foreach($id as $info1=>$info2){
            echo "<br>$info1 e $info2 <br>";
        }
        
    ?>
</body>
</html>