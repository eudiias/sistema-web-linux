<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
}
$SAIDA = shell_exec('ip a');
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

    <!-- BOTÃO HAMBÚRGUER -->
    <button class="hamburger-btn" id="hambtn" aria-label="Abrir menu">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- OVERLAY DO MENU -->
    <nav class="menu-overlay" id="overlay" aria-hidden="true">
        <div class="overlay-header">
            <span class="overlay-logo">SWL</span>
            <span class="overlay-title">Módulos disponíveis</span>
        </div>

        <ul class="overlay-nav">
            <li class="overlay-item">
                <a href="lscpu.php" class="overlay-link">
                    <div class="overlay-left">
                        <span class="overlay-cmd">lscpu</span>
                        <span class="overlay-name">Informações da CPU</span>
                    </div>
                    <span class="overlay-arrow">→</span>
                </a>
            </li>
            <li class="overlay-item">
                <a href="systemctl.php" class="overlay-link">
                    <div class="overlay-left">
                        <span class="overlay-cmd">systemctl</span>
                        <span class="overlay-name">Serviços do sistema</span>
                    </div>
                    <span class="overlay-arrow">→</span>
                </a>
            </li>
            <li class="overlay-item">
                <a href="cat.php" class="overlay-link active">
                    <div class="overlay-left">
                        <span class="overlay-cmd">cat</span>
                        <span class="overlay-name">Leitura de arquivo</span>
                    </div>
                    <span class="overlay-arrow">→</span>
                </a>
            </li>
            <li class="overlay-item">
                <a href="lsusb.php" class="overlay-link">
                    <div class="overlay-left">
                        <span class="overlay-cmd">lsusb</span>
                        <span class="overlay-name">Dispositivos USB</span>
                    </div>
                    <span class="overlay-arrow">→</span>
                </a>
            </li>
            <li class="overlay-item">
                <a href="networkctl.php" class="overlay-link">
                    <div class="overlay-left">
                        <span class="overlay-cmd">networkctl</span>
                        <span class="overlay-name">Status de rede</span>
                    </div>
                    <span class="overlay-arrow">→</span>
                </a>
            </li>
            <li class="overlay-item">
                <a href="ipa.php" class="overlay-link">
                    <div class="overlay-left">
                        <span class="overlay-cmd">ip a</span>
                        <span class="overlay-name">Endereços IP</span>
                    </div>
                    <span class="overlay-arrow">→</span>
                </a>
            </li>
            <li class="overlay-item">
                <a href="mudanome.php" class="overlay-link">
                    <div class="overlay-left">
                        <span class="overlay-cmd">hostname</span>
                        <span class="overlay-name">Mudar nome da máquina</span>
                    </div>
                    <span class="overlay-arrow">→</span>
                </a>
            </li>
        </ul>

        <div class="overlay-footer">
            <a href="logout.php" class="btn-logout">Sair do sistema</a>
        </div>
    </nav>

    <!-- CONTEÚDO DA PÁGINA -->
    <div class="page">
        <p class="eyebrow">Info do Sistema</p>
        <h1 class="page-title">Endereço de<em> IP.</em></h1>
        <p class="page-subtitle">Saída do comando executado no servidor</p>

        <div class="divider"></div>

        <div class="card">
            <div class="card-bar">
                <div class="card-bar-left">
                    <span class="card-label"></span>
                    <span class="card-file"></span>
                </div>
                <span class="card-time"><?= date('d/m/Y — H:i:s') ?></span>
            </div>

            <div class="output-body">
                <div class="cmd-prompt">
                    <span class="prompt-sym">$</span>
                    <span class="cmd-text">ip a</span>
                </div>
                <pre class="output-pre"><?= htmlspecialchars($SAIDA) ?></pre>
            </div>

            <div class="actions">
                <span class="actions-note">Acesso monitorado e registrado</span>
                <a href="menu.php" class="btn-back"><span>← Voltar ao menu</span></a>
            </div>
        </div>
    </div>

    <script>
        const btn = document.getElementById('hambtn');
        const overlay = document.getElementById('overlay');

        btn.addEventListener('click', () => {
            const isOpen = overlay.classList.toggle('open');
            btn.classList.toggle('open', isOpen);
            overlay.setAttribute('aria-hidden', String(!isOpen));
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && overlay.classList.contains('open')) {
                overlay.classList.remove('open');
                btn.classList.remove('open');
                overlay.setAttribute('aria-hidden', 'true');
                btn.focus();
            }
        });
    </script>

</body>
</html>