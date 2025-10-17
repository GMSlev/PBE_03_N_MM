<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09 - 2/10/2025</title>
</head>
<body>
    <?php
        $hora = 3;
        /*$limiteHora = 24;
        if ($hora >= $limiteHora){
            echo "Hora inválida!<br>";
            $hora = $hora % $limiteHora; // ajusta a hora
        }
        else{
        echo "Hora válida!<br>";
        }   
        */

        /*if ($hora < 0) {
            echo "Hora inválida!";
        }
        */
        if ($hora >= 0 && $hora <= 11) {
            echo "Bom dia!";
        } 
        elseif ($hora >= 12 && $hora <= 18) {
            echo "Boa tarde!";
        } 
        elseif ($hora >= 19 && $hora <= 24) {
            echo "Boa noite!";
        }
        else{
            echo "Hora inválida!";
        }
        /*
        Bom dia ($hora >= 6 && $hora <= 11h) - inclusive
        Boa tarde (11h - 18h) - inclusive 
        Boa noite (19h - 24h)

        */
        echo "<hr>";
        $idade = 20;
        $mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
        echo $mensagem;



         date_default_timezone_set("America/Sao_Paulo"); //Define o fuso horário
    echo date("d/m/Y  H:i:s"); // 02/10/2025 10:57:15. Horário do servidor 
    echo "<hr>";
    $diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

    switch ($diaSemana) {
        case 0:
            echo "Domingo";
            break;
        case 1:
            echo "Segunda-feira";
            break;
        case 2:
            echo "Terça-feira";
            break;
        case 3:
            echo "Quarta-feira";
            break;
        case 4:
            echo "Quinta-feira";
            break;
        case 5:
            echo "Sexta-feira";
            break;
        case 6:
            echo "Sábado";
            break;
        default:
            echo "Dia inválido";
    }

        echo md5("Uninove"); //02bb 32 caracteres hexadecimal 

    ?>
</body>
</html>