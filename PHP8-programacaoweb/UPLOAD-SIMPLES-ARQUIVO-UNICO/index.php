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
                <input type="file" class="form-control" id="arquivo" name="arquivo" aria-describedby="arquivo" aria-label="Upload" require>
                <button class="btn btn-primary" type="submit" id="enviar" name="enviar">Enviar</button>
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['enviar'])){
            $tam_max=2097152;
            $permitido=array("jpg", "jpeg", "mpeg", "mp4");
            $extensao=pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        }
        if($_FILES['arquivo']['size']>=$tam_max){
            echo "ERRO: arquivo com tamanho não suportado";
        }else{
            if(in_array($extensao, $permitido)){
                $pasta='imagens/';
                if(!is_dir($pasta)){
                    mkdir($pasta, 0755);
                }
                $tmp=$_FILES['arquivo']['tmp_name'];
                $novoNome=$_FILES['arquivo']['name'];
                if(move_uploaded_file($tmp, $pasta.$novoNome)){
                    echo "Upload realizado com sucesso";
                }else{
                    echo "Falha no upload";
                }
            }else{
                echo "Extensão não suportada";
            }
        }
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>