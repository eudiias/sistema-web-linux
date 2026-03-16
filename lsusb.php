<?php
session_start();
if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
}
$SAIDA = shell_exec('lsusb');
echo "<h2>Info do Sistema - lsusb</h2>";
echo "<pre>$SAIDA</pre>";
echo "<a href=menu.php>Voltar</a>"
?>

