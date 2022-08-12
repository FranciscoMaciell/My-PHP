<?php
    // CRIAR UM COOKIE
    // PARA DELETAR UM COOKIE BASTA APENAS DEIXAR O NOME EM BRANCO E COLOCAR O TEMPO DE VALIDADE NEGATIVO

    setcookie('nome', 'Dimitri', time()+(86400*30));

    setcookie('nome','', time()-5);

    if(isset($_COOKIE['nome'])){
        $nome=$_COOKIE['nome'];
        echo "O nome é $nome";
    }else{
        echo "Não tem nenhum cookie";
    }

    
?>