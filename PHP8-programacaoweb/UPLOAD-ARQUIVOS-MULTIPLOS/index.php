<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
        <h1 class="mt-5 text-center">Upload de arquivos</h1>
        <form method="post" enctype="multipart/form-data" class="m-3">
            <div class="input-group">
                <input type="file" class="form-control" id="arquivo" name="arquivo[]" aria-describedby="arquivo" multiple aria-label="Upload">
                <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Enviar</button>
              </div>
        </form>
    </div>

    <?php
        function reArrayFiles(&$file_post) {
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);
        
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
            return $file_ary;
        }
        if(isset($_POST['enviar'])){
            $arquivoArray=reArrayFiles($_FILES['arquivo']);
            foreach($arquivoArray as $arquivo){
                // VALIDAÇÕES
            $tam_max=2097152;  // 2mega
            $permitido=array("jpg", "png", "jpeg", "mp4");
            $extensao=pathinfo($arquivo['name'], PATHINFO_EXTENSION);

            // VERIFICA SE TEM TAMANHO PERMITIDO
            if($arquivo['size']>=$tam_max){
                echo '<div class="alert alert-danger" role="alert">
                Erro <b>'.$arquivo['name']. '</b> Tamanho maximo de 2MB. Não foi possivel fazer upload
              </div>';
            }else{
                // VERIFICA SE A EXTNSÃO É PERMITIDA
                if(in_array($extensao, $permitido)){
                    $pasta='imagens/';
                    if(!is_dir($pasta)){
                        mkdir($pasta, 0755);
                    }

                    $name_temp=$arquivo['tmp_name'];
                    $novoNome=uniqid().".$extensao";
                    
                    // FUNÇÃO PARA ENVIAR O ARQUIVO
                    if(move_uploaded_file($name_temp, $pasta.$novoNome)){
                        echo '<div class="alert alert-success" role="alert">
                        <b>'.$arquivo['name'].'</B> : Upload feito com sucesso!<br>
                      </div>';
                    }else{
                        echo '<div class="alert alert-danger" role="alert">
                        <b>'.$arquivo['name'].'</B> Não foi possivel fazer o upload
                      </div>';
                    }
                }else{
                    echo '<div class="alert alert-danger" role="alert">
                    Erro: <b>'.$arquivo['name'].'</B> extensão ('.$extensao.') não permitida<br>
                  </div>';
                }
            }
            }
        }
    ?>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>