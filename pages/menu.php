<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA — Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/menustyle.css">
</head>
<body>
 
    <span class="corner-deco tl">Sistema</span>
    <span class="corner-deco tr">v1.0</span>
    <span class="corner-deco bl">&copy; <?= date('Y') ?></span>
    <span class="corner-deco br">Acesso Restrito</span>
 
    <div class="page">
        <p class="eyebrow">Painel Principal</p>
        <h1 class="page-title">Bem-vindo ao<em> Sistema Web Linux (SWL).</em></h1>
        <p class="page-subtitle">Selecione uma operação para executar</p>
 
        <div class="divider"></div>
 
        <div class="card">
            <div class="card-bar">
                <span class="card-label">Módulos disponíveis</span>
                <span class="card-count">7 opções</span>
            </div>
 
            <ul class="menu-list">
                <li class="menu-item">
                    <a href="lscpu.php" class="menu-link">
                        <div class="menu-left">
                            <span class="menu-cmd">lscpu</span>
                            <span class="menu-name">Informações da CPU</span>
                        </div>
                        <span class="menu-arrow">→</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="systemctl.php" class="menu-link">
                        <div class="menu-left">
                            <span class="menu-cmd">systemctl</span>
                            <span class="menu-name">Serviços do sistema</span>
                        </div>
                        <span class="menu-arrow">→</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cat.php" class="menu-link">
                        <div class="menu-left">
                            <span class="menu-cmd">cat</span>
                            <span class="menu-name">Leitura de arquivo</span>
                        </div>
                        <span class="menu-arrow">→</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="lsusb.php" class="menu-link">
                        <div class="menu-left">
                            <span class="menu-cmd">lsusb</span>
                            <span class="menu-name">Dispositivos USB</span>
                        </div>
                        <span class="menu-arrow">→</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="networkctl.php" class="menu-link">
                        <div class="menu-left">
                            <span class="menu-cmd">networkctl</span>
                            <span class="menu-name">Status de rede</span>
                        </div>
                        <span class="menu-arrow">→</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ipa.php" class="menu-link">
                        <div class="menu-left">
                            <span class="menu-cmd">ip a</span>
                            <span class="menu-name">Endereços IP</span>
                        </div>
                        <span class="menu-arrow">→</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="mudanomemaq.php" class="menu-link">
                        <div class="menu-left">
                            <span class="menu-cmd">hostname</span>
                            <span class="menu-name">Mudar nome da máquina</span>
                        </div>
                        <span class="menu-arrow">→</span>
                    </a>
                </li>
            </ul>
 
            <div class="logout-area">
                <a href="logout.php" class="btn-logout"><span>Sair do sistema</span></a>
            </div>
        </div>
    </div>
 
</body>
</html>
 