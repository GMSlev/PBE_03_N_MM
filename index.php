<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Back-End - PHP</title>
    <meta name = "author" content = "Gabriel Martinez Silva">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Testando php - 28/08/2025</h1>
    <a href="Page1.php">Page1.php</a><br>
    <a href="pg04_01.php">pg04_01.php</a><br>
    <a href="pg04_02.php">pg04_02.php</a><br>
    <a href="aula05_01.php">aula05_01.php</a><br>
    <a href="aula05_02.php">aula05_02.php</a><br>
    <a href="aula06_01.php">aula06_01.php</a><br>
    <a href="aula06_02.php">aula06_02.php</a><br>
    <a href ="Atividade06.php">Atividade06.php</a><br>
    <a href ="Calculo06.php">Calculo06.php</a><br>
    <a href="aula07_01.php">aula07_01.php</a><br>
    <a href="aula07_02.php">aula07_02.php</a><br>
    <a href="aula08_01.php">aula08_01.php</a><br>
    <a href="aula09_01.php">aula09_01.php</a><br>
    <a href="aula10_01.php">aula10_01.php</a><br>
    <?php
    echo "Comando pelo php novo<br>";
    echo "Gabriel Martinez Silva";
    
    require_once 'config.php';
    require_once 'header.php'; 
    ?>

    <h1>Banco de Dados - PHP PDO (CRUD)</h1>
    <p>Utilize o menu acima para navegar nas operações.</p>

    <h2>Ações de Configuração e Inicialização</h2>
    <p>Execute estes scripts para preparar o ambiente:</p>
    <ul>
        <li><a href='cria_tabela_sqlite.php' target='_blank'>Criar Tabela - SQLite</a></li>
        <li><a href='cria_tabela_mysql.php' target='_blank'>Criar Tabela - MySQL</a></li>
    </ul>

    <h2>Status Atual da Conexão</h2>
    <?php 
    try {
        // Tenta conectar para mostrar o status
        require_once 'conecta.php';
        echo "<p style='color: green;'>Conexão bem-sucedida! Banco de Dados: **" . strtoupper(DB_TYPE) . "**</p>";
    } catch (Exception $e) {
        echo "<p style='color: red;'>Falha na Conexão: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>

    <?php require_once 'footer.php'; ?>
    <footer>
        <hr>
        <p>Programação Back-End - PHP - Gabriel Martinez Silva</p>
        <p>2025</p>
    </footer>
</body>
</html>
