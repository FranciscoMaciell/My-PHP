<?php
    /*
    *JSON - "JavaScript Object Notation"


    JSON é um foumato leve de troca de informações/dados entre sistemas.

    Basicamente consiste em transformar dados como um objeto ou uma matriz em texto e o contrário também, transformar um texto em um objeto ou uma matriz.

    É a forma mais utilizada atualmente para trocar dados entre sistemas.

    Embora tenha JavaScript no nome, por que originalmente foi feito pensando em aplicações JavaScript, o JSON é um padrão de transmissão de dados aceito em praticamente todas as linguagens atuais, não sá JavaScript.
    Isso inclui o PHP.

    Trocando em miúdos, de uma forma fácil de entender: Podemos dizer que JSON é uma espécie de padrão , um conversor para transmitir dados.

    Como funciona?

    Toda informação enviada ou recebida entre aplicações sempre precisa ser um texto.

    Por isso, todo objeto ou matriz que vai ser enviado primeiro tem que ser transformado em texto.

    Quem faz esse trabalho? JSON.

    Uma vez que esse texto chegou ao seu sistema você vai precisar "transformar" este texto em um objeto ou uma matriz.

    No PHP essas funções de conversão são:
    json_encode() - 
    Converte um array/objeto em um texto, uma string JSON;

    json_decode() - 
    Converte um texto JSON em um objeto ou matriz.
    */

    /*
    $texto='
    {
        "cep": "61652-660",
        "logradouro": "Rua Canavieira",
        "complemento": "",
        "bairro": "Marechal Rondon (Jurema)",
        "localidade": "Caucaia",
        "uf": "CE",
        "ibge": "2303709",
        "gia": "",
        "ddd": "85",
        "siafi": "1373"
      }';
      */

      // CONVERTE EM UM OBJETO
      //$dados=json_decode($texto);

      // CONVERTE EM UMA MATRIZ
      //$dados=json_decode($texto, true);

      //$json=json_encode($dados, JSON_PRETTY_PRINT | //JSON_UNESCAPED_UNICODE);

      //echo "<pre>$json</pre>";

      // INSERIR CAMPOS
      //$dados['professor']="gay";

      //var_dump($dados);

      $texto=$_POST['texto'];
      $dados=json_decode($texto, true);
      $dados['professor']="Lindo";
      $json=json_encode($dados);
      echo $json;
?>