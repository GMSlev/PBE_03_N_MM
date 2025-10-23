<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10 - 23-10-2025</title>
</head>
<body>
    <?php
    echo "<h2>While</h2>";
    $i = 13;
    while ($i < 17) {
        echo " $i ";
        $i++;
    }

    echo "<hr>";
    /*
    1) Qual a saida ?
     13, 14, 15, 16
    2) Qual o valor inicial ?
     13, foi determinado como valor inicial da variavel i
    3)Qual a condição?
    $i < 17, passamos isso como condição para o looping while 
    4)Qual o contador?
    i++, incrementa o  valor de i em 1 a cada implementação do looping
    5)Quantas vezes o looping foi executado?
     4 vezes, o looping ira ser executado enquanto a condição for verdadeira
    6)Qual o valor que tornou a condição falsa?
    17, ultimo valor que passamos para a condição e que é falso
    */
    $i = 5;
    while ($i > 0) {
        echo " $i ";
        $i--;
    }
    echo "<hr>";

    $i = 0;
    while ($i < 11) {
        echo " $i ";
        $i += 2; // $i = $i+1, $i+=1, $i+=2 (correto)
    }
     echo "<hr>";

     echo"<h2>Do While</h2>";
     $i = 3;
    do{ // Faz o papel de "Fazer" a impressão do conteudo pelo menos i vezes para depois verificar a condição.
        echo " $i ";
        $i++;
    }while($i < 5); // Enquanto a condição for verdadeira, repete o looping
    
    echo "<h2>For</h2>";
    for($i=5; $i < 25; $i+=5){
        echo " $i ";
    }
    echo "<h2>Instrução For (Aninhada)</h2>"; // ou looping encadeado | EX: Relógio de ponteiros
    for($i=1; $i<4; $i++){ //Looping externo
        for($j=5; $j<7; $j++){ // Looping interno
            echo " i = $i | j = $j <br>"; 
        }
    }
    ?>
</body>
</html>