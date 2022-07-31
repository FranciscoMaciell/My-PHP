<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funões string</title>
</head>
<body>
    <h1>Funções para manipular string com php</h1>
    <?php

        /*
        $x[0]=4;
        $x[1]=3;
        $x[2]=8;

        var_export($x);
        var_dump($x);
        print_r(nome do vetor);
        

        $t="Aqui  temos um texto gigante criado pelo php e vai mostrar o funciocamento da função wordwrap";
        $r=wordwrap($t, 5, "<br>\n", true);
        echo $r;

        // Trim
        
        $nome="   José da Silva   ";
        echo $nome."<br>";
        echo strlen($nome);
        echo (strlen(trim($nome)))."<br>";
        echo trim($nome)."<br>";         // remove os espaços do começo e do final da string
        $nova=ltrim($nome);
        $novo=rtrim($nome);
        echo $novo;
        

        // função str_word_count() * Numero de palavras dentro da string e gera um vetor com os parametros 1 ou 2

        $frase="Eu vou estudar PHP";
        $count=str_word_count($frase, 0);

        echo $count;
        

        // função explode(" ", variavel com string) conta as palavras de uma string

        $site="Curso em video";
        $vetor=explode(" ", $site);
        print_r($vetor);
        

        //função join ou implode("#", variavel string) coloca o caractere # onde tiver espaços em branco

        $vetor[0]="curso";
        $vetor[1]="em";
        $vetor[2]="vedeo";
        $texto=implode("#", $vetor);
        print ($texto);

        // função chr(codigo da tabela asci)

        $choco=chr(67);
        echo $choco;


        // função ord(variavel com o caractere)

        $letra="C";
        $cod=ord($letra);

        echo $cod;
        

        // função strtolower(string) todas para minusculas

        $nome="Gustavo Guanabara";
        print("Seu nome é ".strtolower($nome));
        
        //função strtoupper(string) todas para maiusculas

        $nome="Gustavo Guanabara";
        print strtoupper($nome);
        

        // função ucfirst(string) primeira letra maiuscula

        $nome="gustavo guanabara";
        print("Seu nome é ".ucfirst($nome));


        // função ucwords(string) primeira letra de cada palavra em maiusculo

        $nome="Gustavo Guanabara";
        echo "Seu nome é ".ucwords($nome);
        

        // função strpos($variavel, "palavra")

        $frase="Estou aprendendo PHP";
        $pos=strpos($frase, "PHP");
        echo "A string foi encontrada na posição $pos";
        

        // função substr()

        $site="Curso em Video";
        $sub=substr($site, 0, 5);
        echo $sub;


        // função str_pad($nome, 30, " ", STR_PAD_RIGHT)

        $nome="Guanabara";
        $novo=str_pad($nome, 30, " ", STR_PAD_LEFT);
        print("Meu professor $novo é gay!");
        */

        // função str_replace() e ireplace()

        $frase="Gosto de estudar Matemática!!";
        $novaFrase=str_ireplace("Matemática", "PHP", $frase);
        echo $novaFrase;
    ?>
</body>
</html>