<?php
session_start();
if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
}
$SAIDA = shell_exec('cat /etc/hosts');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA — /etc/hosts</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylepages.css">
</head>
<body>
 
    <span class="corner-deco tl">Sistema</span>
    <span class="corner-deco tr">v1.0</span>
    <span class="corner-deco bl">&copy; <?= date('Y') ?></span>
    <span class="corner-deco br">Acesso Restrito</span>
 
    <div class="page">
        <p class="eyebrow">Info do Sistema</p>
        <h1 class="page-title">Leitura de<em> arquivo.</em></h1>
        <p class="page-subtitle">Saída do comando executado no servidor</p>
 
        <div class="divider"></div>
 
        <div class="card">
            <div class="card-bar">
                <div class="card-bar-left">
                    <span class="card-label">Arquivo</span>
                    <span class="card-file">/etc/hosts</span>
                </div>
                <span class="card-time"><?= date('d/m/Y — H:i:s') ?></span>
            </div>
 
            <div class="output-body">
                <div class="cmd-prompt">
                    <span class="prompt-sym">$</span>
                    <span class="cmd-text">cat /etc/hosts</span>
                </div>
                <pre class="output-pre"><?= htmlspecialchars($SAIDA) ?></pre>
            </div>
 
            <div class="actions">
                <span class="actions-note">Acesso monitorado e registrado</span>
                <a href="menu.php" class="btn-back"><span>← Voltar ao menu</span></a>
            </div>
        </div>
    </div>
 
</body>
</html>
 