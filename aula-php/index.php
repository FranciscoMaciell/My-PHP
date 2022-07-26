<?php
    // Manipulação de string

    $palavra="Uma frase comprida para ver quantas palavras tem";

    $data="25-08-2021";

    //echo strlen($palavra);

    /* conta quantas palavras tem a frase
    echo str_word_count($palavra); 
    
    Mostra a posição da palavra que está sendo buscada strpos();

    echo strpos("Oi tudo bom!", "tudo");
    */
    
    /* echo "data antiga = $data <br>data formatada = ".str_replace("-", "/", $data); */

    /* 
    $valor1=100;
    $valor2=5.75;
    $valor3="teste";

    var_dump(is_int($valor1));
    echo "<br>";

    var_dump(is_numeric($valor3));
    */

    /* FUNÇÕES MATEMATICAS */

    //echo rand(0, 100);

    /* constantes */

    /*
    define("Carros", ["Fusca", "Gol", "Uno"]);

    echo Carros[1];
    */


    // if else

    /*
    $hora=20;

    if($hora<12){
        echo "Bom dia!";
    }else if($hora>12&&$hora<16){
        echo "Boa tarde!";
    }else{
        echo "Boa noite!";
    }
    */

    //foreach

    /* 
    $cores=["azul", "amarelo", "verde", "vermelho"];

    foreach($cores as $cor){
        echo $cor ." <br>";
    }
    */

    // FUNÇÕES functions()

    /*
    function fazercafe($tipocafe="cappuccino"){
        return "Fazendo uma xicara de café do tipo: $tipocafe";
    }

    echo fazercafe("expresso")." <br>";
    echo fazercafe();
    */

    //ARRAIS

    /*
    $carros=["Fusca", "Uno", "Gol"];

    $qtd=count($carros);
    */

    /*
    foreach($carros as $modelos){
        echo "Os modelos são: $modelos <br>";
    }
    */

    /*
    $idade=["Dimitri"=>"30", "Maria"=>"15", "Pedro"=>"20"];

    //echo $idade["Dimitri"];

    foreach($idade as $chave=>$valor){
        echo "O nome é $chave e a idade é $valor <br>";
    }
    */

    /* para matrizes nomais sort e rsort

    $carros = ["Fusca", "Uno", "Gol", "Fusion", "Prisma"];
    //sort($carros);  //Ordem alfabetica ou ordem crescente
    rsort($carros);     // ordem de tras para frente

    foreach($carros as $carro){
        echo $carro."<br>";
    }
    */

    //Para matrizes associativas ASORT()

    /*
    $idade=["Dimitri"=>"30", "Maria"=>"99", "Pedro"=>"15"];

    //asort($idade);//ordena pelo valor
    //ksort($idade);//ordena pela chave
    arsort($idade);//ordena na forma decrecente
    foreach($idade as $chave=>$valor){
        echo "O nome do usuario é $chave e a idade é $valor<br>";
    }
    */

    // superglobais $_SERVER

    /*
    echo $_SERVER['PHP_SELF'];
    ECHO "<br>";
    echo $_SERVER['SERVER_NAME'];
    ECHO "<br>";
    echo $_SERVER['HTTP_HOST'];
    ECHO "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    ECHO "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    ECHO "<br>";

    foreach($_SERVER as $chave=>$valor){
        echo "<strong>$chave</strong>: $valor <br>";
    }
    */

    //TRABALHANDO COM O $_GAT


   


