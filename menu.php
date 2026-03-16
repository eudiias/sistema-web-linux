<?php
session_start();
if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
</head>
<body>
    <h2>Bem-vindos ao sistema</h2>
    <a href="lscpu.php">
        iscpu
    </a>
    <br>
    <a href="systemctl.php">
        systemctl
    </a>
    <br>
    <a href="cat.php">
        Cat
    </a>
    <br>
    <a href="lsusb.php">
        lsusb
    </a>
    <br>
    <a href="networkctl.php">
        Network Status
    </a>
    <br>
    <a href="ipa.php">
        ip a
    </a>
    <br>
    <a href="mudanomemaq.php">
        Mudar nome da maquina
    </a>
    <br><br>
    <a href="logout.php">SAIR</a>
</body>
</html>