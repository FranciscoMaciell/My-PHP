<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // VERIFICA SE O POST NOME ESTÁ VAZIO
        if(empty($_POST['nome'])){
            $erroNome="Campo Nome Obrigatorio";
        }else{
            // LIMPA O POST NOME
            $nome=limpa_var($_POST['nome']);
            // VERIFICA SE TEM SOMENTE LETRAS
            if(!preg_match("/^[a-zA-Z-' ]*$/",$nome)){
                $erroNome="Apenas letras e espaços em branco";
            }
        }

        //VERIFICA SE O POST EMAIL ESTÁ VAZIO
        if(empty($_POST['email'])){
            $erroEmail="Campo Email Obrigatorio";
        }else{
            $email=limpa_var($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail="Email invalido";
            }
        }

        // VERRIFICA SE O CAMPO EMAIL ESTÁ VAZIO
        if(empty($_POST['senha'])){
            $erroSenha="Informe uma senha";
        }else{
            $senha=limpa_var($_POST['senha']);
            if(strlen($senha)<6){
                $erroSenha="Senha invalida, minimo 6 caracteres";
            }
        }
    }


    function limpa_var($valor){
        $valor=trim($valor);
        $valor=stripslashes($valor);
        $valor=htmlspecialchars($valor);
        return $valor;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><span>Aula PHP</span><br>Validação de Formulario</h1>
    <form action="form.php" method="post">

        <!-- Nome Completo-->
        <label for="inome">Nome Completo</label>
        <br><input type="text" name="nome" id="inome" placeholder="Nome Completo" require>
        <br><span class="erro"></span>

        <!-- Email -->
        <label for="email">E-mail</label>
        <br><input type="email" name="email" id="email" placeholder="email" require>
        <br><span class="erro"></span>

        <!-- Senha -->
        <label for="id">Senha</label>
        <br><input type="password" name="senha" id="id" placeholder="senha" require>
        <br><span class="erro"></span>

        <!-- Repete Senha -->
        <label for="id">Repetir Senha</label>
        <br><input type="password" name="repeteSenha" id="id" placeholder="Repetir senha" require>
        <br><span class="erro"></span>

        <!-- Enviar Formulario -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>