<?php
session_start();
$LG = $_POST['lg'];
$SE = $_POST['se'];
if($LG == "joca" && $SE == "1234")
{
	$_SESSION['Logado'] = true;
	header("Location: pages/menu.php");
	exit();
}
$erro = (!empty($_POST) && !$_SESSION['Logado']) ? true : false;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SISTEMA</title>
	<link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
	<span class="corner-deco tl">Sistema</span>
	<span class="corner-deco tr">v1.0</span>
	<span class="corner-deco bl">&copy; <?= date('Y') ?></span>
	<span class="corner-deco br">Acesso Restrito</span>
 
	<div class="card">
		<p class="card-eyebrow">Área Restrita</p>
		<h1 class="card-title">Bem-vindo<em>.</em></h1>
		<p class="card-subtitle">Insira suas credenciais para continuar</p>
		<div class="divider"></div>
 
		<?php if($erro): ?>
		<div class="error-msg">
			<svg width="14" height="14" viewBox="0 0 14 14" fill="none">
				<circle cx="7" cy="7" r="6.5" stroke="currentColor"/>
				<path d="M7 4v3.5M7 9.5v.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
			</svg>
			Usuário ou senha incorretos.
		</div>
		<?php endif; ?>
 
		<form method="post" autocomplete="off">
			<div class="field">
				<label for="lg">Usuário</label>
				<input type="text" name="lg" id="lg" placeholder="Digite seu login" autofocus>
			</div>
			<div class="field">
				<label for="se">Senha</label>
				<input type="password" name="se" id="se" placeholder="••••••••">
			</div>
			<button type="submit" class="btn-submit"><span>Entrar no sistema</span></button>
		</form>
 
		<p class="card-footer">Acesso monitorado e registrado</p>
	</div>
</body>
</html>


