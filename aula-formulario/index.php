<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulário</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <main>
        <h1><span>AULA PHP</span><br> Validação de formulário</h1>
        <form>
            <!-- NOME COMPLETO -->
            <label> Nome Completo </label>
            <input type="text" nome="nome" placeholder="Digite seu nome">
            <br><span class="erro"></span>

            <!-- EMAIL -->
            <label>E-mail</label>
            <input type="text" nome="email" placeholder="email@provedor.com">
            <br><span class="erro"></span>
        </form>
    </main>
</body>
</html>