<?php
    $erroNome="";
    $erroEmail="";
    $erroSenha="";
    $erroRepeteSenha="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //verifica se a variavel nome está vazia
        if(empty($_POST['$nome'])){
            $erroNome="Por favor preencha um nome";
        }else{
            //pega o valor vindo do post e limpa
            $nome=limpaPost($_POST['nome']);

            //Vai verificar se tem somente letras
            if(!preg_match("/^[a-zA-Z-']*$/",$nome)){
                $erroNome="Apenas aceitamos letras e espaços em branco";
            }
        }

        if(empty($_POST['email'])){
            $erroEmail="Entre com um email valido";
        }else{
            $email=LimpaPost($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmail="E-mail invalido";
            }
        }

        if(empty($_POST['senha1'])){
            $erroSenha1="Informe uma senha";
        }else{
            $erroSenha=limpaPost($_POST['senha1']);
            if(strlen($senha)<6){
                $erroSenha="A senha precisa ter no minimo 6 caracteres";
            }
        }

        if(empty($_POST['senha2'])){
            $erroSenha2="Informe uma senha valida";
            if($senha1!==$senha2){
                $erroRepeteSenha="Confirmação de senha invalida";
            }else{
                $senha2=$_POST['senha2'];
            }
        }
    }

    function limpaPost($valor){
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
    <title>formulario-validação</title>
    <style>
        
        

    </style>
</head>
<body>
    <h1><span>AULA PHP</span><br>Validação de formulario</h1>
    <form method="post">

        <!-- nome completo -->
        <p>
            <label for="nome">Nome Completo</label><br>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome"  <?php if(!empty($erroNome)){echo "class='invalido'";}?>>
            <br><span class="erro"><?php echo $erroNome;?></span>
        </p>

        <!-- E-mail -->
        <p>
            <label for="email">E-mail</label><br>
            <input type="email" name="email" id="email" placeholder="email@servidor.com"  <?php echo"class='invalido'";?>>
            <br><span class="erro"><?php echo $erroEmail;?></span>
        </p>

        <!-- Senha -->
        <p>
            <label for="senha1">Senha</label><br>
            <input type="password" name="senha1" id="senha1" placeholder="Digite sua senha" >
            <br><span class="erro"><?php echo $erroSenha;?></span>
        </p>

        <!-- Repetir senha -->
        <p>
            <label for="senha1">Senha</label><br>
            <input type="password" name="senha2" id="senha1" placeholder="Digite sua senha" >
            <br><span class="erro"><?php echo $erroRepeteSenha;?></span>
        </p>

        <!-- botão enviar -->
        <input type="submit" value="Enviar" class="botao">

    </form>
</body>
</html>