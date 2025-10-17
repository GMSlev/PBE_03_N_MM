<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula08 - 25/09/25</title>
</head>
<body>
    <h2>Relacionais</h2>
    <?php
//////////////////OPERADORES DE COMPARAÇÃO///////////////////////////
        $a = 10; // valor atribuido à variável (10 do tipo inteiro)
        $b = "10"; //valor atribuido à variável (10 do tipo string)

        echo "Igualdade = ". ($a == $b)."<br>"; // 1 (verdadeiro)
        echo "Idêntico = ". ($a === $b)."<br>"; // 0 (falso)
        echo "Não é igual = ". ($a != $b)."<br>"; // 0 (falso)
        echo "Não é idêntico = ". ($a !== $b)."<br>"; // 1 (verdadeiro)

        $a=10; //valor atribuido à variável (10 do tipo inteiro)
        $b=10; //valor atribuido à variàvel (10 do tipo inteiro)
        $c=11; //valor atribuido à variável (11 do tipo inteiro)
        echo "Menor: ".($a<$b)."<br>"; //falso
        echo "Menor ou igual: ".($a<=$b)."<br>"; //verdadeiro
        echo "Maior: ".($c>$b)."<br>"; // verdadeiro
        echo "Maior ou igual: ".($c>=$b)."<br>"; //verdadeiro
//////////////////OPERADORES LÓGICOS(NOT)///////////////////////////////
        echo "OPERADOR LÓGICO NOT <br>";
        $a=50; //valor atribuido à variável (50 do tipo inteiro)
        $b=120; //valor atribuido à variável (120 do tipo inteiro)
        $c= ($a<=$b); // verdadeiro
        $d= !($a<=$b); //falso
        var_dump($c); // imprime o tipo e o valor da variável
        echo "<br>"; // Imprime uma quebra de linha 
        var_dump($d); // Imprime o tipo e o valor da variável 
        echo "<br>"; // Imprime uma quebra de linha
///////////////////OPERADORES LÓGICOS(E ou &&)/////////////////////////////////////
        echo "OPERADOR LÓGICO E <br>";
        $a=50; //valor atribuido à variável (50 do tipo inteiro)
        $b=120; //valor atribuido à variável (120 do tipo inteiro)
        $c=200; //valor atribuido à variável (200 do tipo inteiro)
        $e=(($a<=$b) &&  ($a>=$c)); // falso ( V && F = F)
        echo "<br>"; //Imprime uma quebra de linha
        var_dump($e); // Imprime o tipo e o valor da variável 
///////////////////OPERADORES LÓGICOS (OU ou ||)/////////////////////////////////////
        $a=50; //valor atribuido à variável (50 do tipo inteiro)
        $b=120; // valor atribuido à variável (120 do tipo inteiro)
        $c=200; // valor atribuido à variável (200 do tipo inteiro)
        $d=(($a>=$b) or ($a>=$c)); // falso (F or F = F)
        $e=(($a>=$b) || ($a<=$c)); // verdadeiro (F ou V = V)
        var_dump($d); // Imprime o tipo e o valor da variável
        echo "<br>"; // Quebra de linha
        echo "<br>"; // Quebra de linha
        var_dump($e); // Imprime o tipo e o valor da variável 
///////////////////OPERADOR LÓGICO (XOR)/////////////////////////////////////
        $a=50;//valor atribuido à variável (50 do tipo inteiro)
        $b=120;// valor atribuido à variável (120 do tipo inteiro)
        $c=200; // valor atribuido à variável (200 do tipo inteiro)
        $d=(($a<=$b) xor ($c<=$a)); // verdadeiro ( V xor F - V)
        $e=(($a>=$b) xor ($a>=$c)); // falso (F xor F - F)
        var_dump($d); //Imprime o tipo e o valor da variável
        echo "<br>"; // Quebra de linha
        var_dump($e); // Imprime o tipo e o valor da variável 
/////////////////OPERADOR TERNáRIO///////////////////////////////////////
        echo "<br>OPERADOR TERNÁRIO<br>";
        $a=50; //valor atribuido à variável (50 do tipo inteiro)
        $b=120; //valor atribuio à variável (120 do tipo inteiro)
        $c=200; // valor atribuido à variável (200 do tipo inteiro)
        $d=($a<=$b) ? "Verdadeiro" : "Falso"; // Condição verdadeira
        $e=($a>=$c) ? "Verdadeiro" : "Falso"; // Condição falsa
        echo "d = $d<br>e = $e"; //Imprime o valor e o tipo da variável
    ?>
</body>
</html>