<?php
session_start();
if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
}
$SAIDA = shell_exec('systemctl status apache2');
echo "<h2>Info do Sistema - systemctl</h2>";
echo "<pre>$SAIDA</pre>";
echo "<a href=menu.php>Voltar</a>"
?>

