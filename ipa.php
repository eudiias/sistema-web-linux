<?php
session_start();
if(!isset($_SESSION['Logado'])){
    header("Location: index.php");
    exit();
}
$SAIDA = shell_exec('ip a');
echo "<h2>Info do Sistema - Ip</h2>";
echo "<pre>$SAIDA</pre>";
echo "<a href=menu.php>Voltar</a>"
?>

