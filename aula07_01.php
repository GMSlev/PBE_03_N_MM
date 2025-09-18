<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula07_01 - 18/09/2025</title>
</head>
<body>
    <h1>Aula07_01 - 18/09/2025</h1>
    <h2>Operadores Aritméticos</h2>
    <?php
    $a=10;
    $b=3;
    echo "Adição:".($a + $b); //13
    echo "<br>Subtração:".($a - $b); //7
    echo "<br>Multiplicação:".($a * $b); //30
    echo "<br>Divisão:".($a / $b); //3.33
    echo "<br>Módulo:".($a % $b); //1
    echo "<br>Exponenciação:".($a ** $b); //1000
    ?>
    <h2>Atribuição</h2>
    <?php
    $a=10;
    $b=2;
    $a+=$b; //$a = $a + $b --> 12
    $b-=5; // $b = $b - 5 --> -3
    echo "a = $a"; //12
    echo "<br>b = ".$b; // -3
    $c=11;
    $d=6;
    $c%=$d; // $c = $c % $d --> 5
    $d+=$a; // $d = $d + Sa --> 18
    echo "<br>c = ".$c; // 5
    echo "<br>d = ".$d; // 18
    ?>
    <h2>Operadores String</h2>
    <?php
    $a = "Maria "; // $a = Maria
    echo "$a <br>"; // Maria
    $b = "Leopoldina "; // $b = Leopoldina
    echo "$b <br>"; // Leopoldina
    echo $a . $b; // Maria Leopoldina
    $b .= $a; // $b = $b . $a --> Leopoldina Maria
    echo "<br>$b"; // Leopoldina Maria
    $b .= "Martinez"; // $b = $b . "Martinez" --> Leopoldina Maria Martinez
    echo "<br>$b"; // Leopoldina Maria Martinez
    ?>
    <h2>Operadores de Incremento e Decremento</h2>
    <?php
    $x = 100;
    echo "x = ".$x++; // 100
    echo "<br>x final = ".$x; // 100
    echo "<hr>";
    $i = 10;
    echo "<br> i = $i"; // 10
    /*
    $i++; // $i = $i + 1 --> 11
    $i++; // 12
    ++$i; // 13
    ++$i; // 14

    $i+=4; // 14 --> Outra forma para fazer a mesma operação que foi feita lofo acima.
    */
    $i++; // 11
    $i++; // 12
    ++$i; // 13
    ++$i; // 14
    echo "<br> i final = $i"; // 14
    $i--; // 13
    $i--; // 12
    --$i; // 11
    echo "<br> i final = $i"; // 11
    ?>
</body>
</html>