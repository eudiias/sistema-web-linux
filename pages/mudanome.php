<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: ../index.php");
    exit();
}
 
$mensagem = '';
$tipo = '';

$atual = shell_exec("hostname");
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $NMAQ = trim($_POST['hostname'] ?? '');
 
    if (!preg_match('/^[a-zA-Z0-9-]{1,63}$/', $NMAQ)) {
        $mensagem = 'Nome inválido. Use apenas letras, números e hífen (máx. 63 caracteres).';
        $tipo = 'erro';
    } else {
        $saida = shell_exec("sudo hostnamectl set-hostname $NMAQ");
 
        if (empty(trim($saida))) {
            $mensagem = 'Hostname alterado com sucesso para: <strong>' . htmlspecialchars($NMAQ) . '</strong>';
            $tipo = 'ok';
            $atual = $NMAQ;
        } else {
            $mensagem = 'Erro ao alterar: ' . htmlspecialchars($saida);
            $tipo = 'erro';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA — Hostname</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/mudanome.css">
</head>
<body>
 
    <span class="corner-deco tl">Sistema</span>
    <span class="corner-deco tr">v1.0</span>
    <span class="corner-deco bl">&copy; <?= date('Y') ?></span>
    <span class="corner-deco br">Acesso Restrito</span>
 
    <div class="card">
        <p class="card-eyebrow">Configuração</p>
        <h1 class="card-title">Nome da<em> máquina.</em></h1>
        <p class="card-subtitle">Altere o hostname do servidor</p>
        <div class="divider"></div>
 
        <div class="current-host">
            <span class="current-label">Atual:</span>
            <span class="current-value"><?= htmlspecialchars($atual) ?></span>
        </div>
 
        <?php if($mensagem): ?>
        <div class="msg <?= $tipo ?>">
            <?php if($tipo === 'erro'): ?>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                <circle cx="7" cy="7" r="6.5" stroke="currentColor"/>
                <path d="M7 4v3.5M7 9.5v.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
            </svg>
            <?php else: ?>
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                <circle cx="7" cy="7" r="6.5" stroke="currentColor"/>
                <path d="M4.5 7l2 2 3-3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <?php endif; ?>
            <?= $mensagem ?>
        </div>
        <?php endif; ?>
 
        <form method="post">
            <div class="field">
                <label for="hostname">Novo hostname</label>
                <input
                    type="text"
                    name="hostname"
                    id="hostname"
                    placeholder="ex: servidor-01"
                    maxlength="63"
                    autofocus
                >
                <p class="field-hint">Letras, números e hífen. Máximo 63 caracteres.</p>
            </div>
            <button type="submit" class="btn-submit"><span>Aplicar alteração</span></button>
        </form>
 
        <div class="card-footer">
            <span class="card-footer-note">Requer privilégios de root</span>
            <a href="menu.php" class="btn-back">← Voltar</a>
        </div>
    </div>
 
</body>
</html>
 