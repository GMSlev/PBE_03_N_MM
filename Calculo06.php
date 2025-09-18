<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
</head>
<body>
    <h1>Calcular Média - 11/09/25</h1>
    <?php
        $av1 = $_POST["av1"];
        $av2 = $_POST["av2"];
        $data = $_POST["data"];
        echo "Data: $data <br>";
        $media = ($av1 + $av2) / 2;
        echo "AV1: $av1 <br>";
        echo "AV2: $av2 <br>";
        echo "Média: $media <br>";
        if($media >= 6){
            echo "Aprovado";
        }else{
            echo "Reprovado";
        }
        ?>
</body>
</html>