<?php
    /*
    echo date('d/m/Y');
    echo "<br>";
    echo date('H:i:s');
    */

    $hoje=date('Y-m-d');
    $vencimento='2022-10-15';
    $diferenca=strtotime($vencimento)-strtotime($hoje);
    $dias=floor($diferenca/(60*60*24));

    // CONVERSÃO PARA O PADRÃO BR
    $data_hoje=explode('-', $hoje);
    $hoje=$data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

    $vec=explode('-', $vencimento);
    $vencimento=$vec[2]."/".$vec[1]."/".$vec[0];
    

    echo "Hoje: ".$hoje;
    echo "<br>Dia do vencimento: ".$vencimento;
    echo "<br>A diferença é de $dias dias entre as datas";

    //COMPARAR DUAS DATAS MAIOR OU MENOR
    $data1='2021-09-15';
    $data2='2021-09-20';

    if(strtotime($data1)>strtotime($data2)){
        echo "A data 1 é maior que a data 2";
    }else if(strtotime($data1)==strtotime($data2)){
        echo "A data 1 é igual a data 2";
    }else{
        echo "A data 1 é menor que a data 2";
    }

?>