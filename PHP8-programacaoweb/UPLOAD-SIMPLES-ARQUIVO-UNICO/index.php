<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div class="conteiner">
        <form method="post" enctype="multipart/form-data" class="m-5">
            <div class="input-group">
                <input type="file" class="form-control" id="arquivo" name="arquivo[]" multiple aria-describedby="arquivo" aria-label="Upload" require>
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
                $tam_max=2097152;
                $permitido=array("jpg", "jpeg", "mpeg", "mp4");
                $extensao=pathinfo($arquivo['name'], PATHINFO_EXTENSION);

                if($arquivo['size']>=$tam_max){
                    echo "Tamanho do arquivo não suportado";
                }else{
                    if(in_array($extensao, $permitido)){
                        $pasta='imagens/';
                        if(!is_dir($pasta)){
                            mkdir($pasta);
                        }
                        $tmp=$arquivo['tmp_name'];
                        $novoNome=uniqid().".$extensao";

                        if(move_uploaded_file($tmp, $pasta.$novoNome)){
                            echo "Upload realizado com sucesso";
                        }else{
                            echo "Falha no upload";
                        }
                    }else{
                        echo "extensao nao suportada";
                    }
                }
            }
        }
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>