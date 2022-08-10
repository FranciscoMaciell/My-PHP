<?php
    // MANIPULAÇÃO DE PASTAS

    $pasta="arquivos/";
   
    //COMANDO PARA CRIAR PASTAS

    if(!is_dir($pasta)){
        mkdir($pasta, 0755);
    }

    // COMANDO PARA RENOMEAR UMA PASTA
    //rename($pasta, 'teste');

    // COMANDO PARA MOVER UMA PASTA 

    //rename($pasta, 'imagem');

    // FUNÇÕES PARA MANIPULAÇÃO DE ARQUIVOS

    /*
    fopen() - Abrir e criar arquivos
    fwrite() - Escrever no arquivo
    fclose() - Fechar o arquivo
    feof() - Durante a leitura avisa que chegou no final do arqivo
    fgets() - Pega uma linha do arquivo até o maximo de 1024bytes.
    file_put_contents() - Cria um arquivo/sobrescreve
    file_get_contents() - Pega todo o conteudo em uma string.
    unlink() - Deleta um arquivo 
    copy() - Copia arquivo
    scandir() - lista tudo que tiver dentro da pasta
    */

    $nome_arquivo=date('y-m-d-H-i-s')."txt";
    $arquivo=fopen($pasta.$nome_arquivo, "a+");
    fwrite($arquivo, "Ijetando texto 1 com PHP". PHP_EOL);
    fwrite($arquivo, "Ijetando texto 2 com PHP". PHP_EOL);
    fwrite($arquivo, "Ijetando texto 3 com PHP". PHP_EOL);

    fclose($arquivo);

    // LER SE UM ARQUIVO EXISTE

    $caminhoArquivo=$pasta.$nome_arquivo;

    if(file_exists($caminhoArquivo)&&is_file($caminhoArquivo)){
        /*$abrirArquivo=fopen($caminhoArquivo, "r");
        while(!feof($abrirArquivo)){
            echo fgets($abrirArquivo)."<br>";
        }

        echo file_get_contents($caminhoArquivo)."<br>";
        */
        if(is_dir($pasta)){
            foreach(scandir($pasta) as $arquivo){
                $caminho=$pasta.$arquivo;
                if(is_file($caminho)){
                    unlink($caminho);
                }
            }
            rmdir($pasta);
        }
        
    }
?>