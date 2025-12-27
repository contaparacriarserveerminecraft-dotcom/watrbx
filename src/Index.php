<?php
// Carrega variáveis de ambiente se estiver usando vlucas/phpdotenv
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Inicializa .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Exemplo de uso de variável de ambiente
$siteName = $_ENV['SITE_NAME'] ?? 'Roblox Revival';

// Página inicial
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($siteName) ?></title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            color: #333;
        }
        .box {
            background: white;
            padding: 30px;
            margin: auto;
            width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Bem-vindo ao <?= htmlspecialchars($siteName) ?>!</h1>
        <p>Este é um site revival inspirado no Roblox clássico.</p>
        <p><a href="/login.php">Entrar</a> | <a href="/register.php">Cadastrar</a></p>
    </div>
</body>
</html>
