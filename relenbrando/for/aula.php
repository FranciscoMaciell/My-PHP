<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada com for</title>
</head>
<body>
    <div>
        <form action="aula1.php" method="get">
            <legend><H1>tabuada com for</H1></legend>
            <label for="num">Valor</label>
            <select name="num" id="num">
                <?php
                    for($i=1; $i<=10; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>
</html>