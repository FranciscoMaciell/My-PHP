<?php
    session_start();

    $_SESSION['nome']="Dimitri";
    $_SESSION['profissão']="Professor";
    /*
    SESSIONS (SESSÕES)

    Uma sessão é basicamente uma forma de armazenar variáveis e compartilhar elas entre todas as páginas do seu site, enquanto o navegador estiver aberto or até o usuário ficar inativo.

    Parecido com o conceito de cookies, mas ela não cria um arquivo. A sessão fica ativa apenas durante o uso.

    Fechor o navegador ou destruiua sessão ela se encerra.

    SINTAXE
    */

    // inciar um sessão

    //session_start() - precisa estar logo abaixo da tag do PHP.

    // CRIAR / MODIFICAR VARIAVEL DE SESSÃO 
    /*
    $_SESSION['nome']='Dimitri';
    $_SESSION['PROFISSÃO']='Professor';


    // REMOVER TODAS AS VARIAVEIS DE SESSÃO

    session_unset(); ou $_SESSION=array();

    // DESTRUIR A SESSÃO

    session_destroy();
    */
?>  