<?php
session_start();
if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
}
$SAIDA = shell_exec('networkctl status');
echo "<h2>Info do Sistema - Network Status</h2>";
echo "<pre>$SAIDA</pre>";
echo "<a href=menu.php>Voltar</a>"
?>

