<?php
    // MANIPULAÇÃO DE PASTAS
    /*
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

    // CRIA A VARIAVEL COM O NOME DA PASTA
    $pasta="arquivos/";

    // TESTA SE EXISTE O DIRETORIO/ SE NÃO EXISTE CRIA
    if(!is_dir($pasta)){
        mkdir($pasta);
    }

    // CRIA O NOME DO ARQUIVO
    $nomeArquivo=date('y-m-d-H-i-s').".txt";

    // CRIA O ARQUIVO
    $arquivo=fopen($pasta.$nomeArquivo, 'c+');

    // FAZ A ESCRITA NO ARQUIVO
    fwrite($arquivo, "Ijetando conteudo 1".PHP_EOL);
    fwrite($arquivo, "Ijetando conteudo 2".PHP_EOL);
    fwrite($arquivo, "Ijetando conteudo 3".PHP_EOL);

    // FECHA O ARQUIVO
    fclose($arquivo);

    $caminho=$pasta.$nomeArquivo;

    // TESTA SE O ARQUIVO EXISTE E SE É UM ARQUIVO
    if(file_exists($caminho)&&is_file($caminho)){
        /*
        // COM A FUNÇÃO FILE_GET_CONTENTS NÃO É PRECISO ABRIR E NEM FECHAR O ARQUIVO
        echo file_get_contents($caminho);
        */
        $abrirArquivo=fopen($caminho, 'r');
        while(!feof($abrirArquivo)){
            echo fgets($abrirArquivo)."<br>";
        }
        fclose($abrirArquivo);

        // DELETA PASTA COM ARQUIVOS 
        if(is_dir($pasta)){
            foreach(scandir($pasta) as $arq){
                $caminho=$pasta.$arq;
                if(is_file($caminho)){
                    unlink($caminho);
                }
            }
            rmdir($pasta);
        }
    }

    // FAZ COPIA DO ARQUIVO
    $arquivo=fopen("texte.txt", 'a+');
    fwrite($arquivo, "Ijetando conteudo 1".PHP_EOL);
    fwrite($arquivo, "Ijetando conteudo 2".PHP_EOL);
    fwrite($arquivo, "Ijetando conteudo 3".PHP_EOL);
    fclose($arquivo);

    copy('texte.txt', 'teste2.txt');

?>