    <?php
    session_start();
    $erro = false;
    if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $servername = "localhost";
            $username = "dias";
            $password = "Cdin@2202";
            $dbname = "sistema_web_linux";


            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
                

            $conn = new mysqli($servername, $username,$password, $dbname);

            if ($conn->connect_error)
                {
                    die("Conexão falhou" . $conn->connect_error);
                }

            $busca = $conn->prepare("INSERT INTO CadUser (nome, email, senha) VALUES (?, ?, ?)");
            $busca->bind_param("sss", $nome, $email, $senha);
            $resultado = $busca->execute();

            if ($resultado === TRUE) {
                $conn->close();
                header("Location: ../index.php");
                exit;
            } else {
                $erro = true;
            }
            $busca->close();
            $conn->close();
        }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SISTEMA</title>
        <link rel="stylesheet" href="../css/indexstyle.css">
    </head>
    <body>
        <span class="corner-deco tl">Sistema</span>
        <span class="corner-deco tr">v1.0</span>
        <span class="corner-deco bl">&copy; <?= date('Y') ?></span>
        <span class="corner-deco br">Acesso Restrito</span>
    
        <div class="card">
            <p class="card-eyebrow">Área Restrita</p>
            <h1 class="card-title">Bem-vindo<em>.</em></h1>
            <p class="card-subtitle">Crie suas credenciais para continuar</p>
            <div class="divider"></div>
    
            <?php if($erro): ?>
            <div class="error-msg">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                    <circle cx="7" cy="7" r="6.5" stroke="currentColor"/>
                    <path d="M7 4v3.5M7 9.5v.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                </svg>
                Algum dado não foi preenchido.
            </div>
            <?php endif; ?>
    
            <form method="post" autocomplete="off">
                <div class="field">
                    <label for="lg">Usuário</label>
                    <input type="text" name="nome" id="lg" placeholder="Digite seu login" autofocus>
                </div>
                <div class="field">
                    <label for="em">E-mail</label>
                    <input type="email" name="email" id="em" placeholder="Digite o seu E-Mail">
                </div>
                <div class="field">
                    <label for="se">Senha</label>
                    <input type="password" name="senha" id="se" placeholder="••••••••">
                </div>
                <button type="submit" class="btn-submit"><span>Criar registro</span></button>
            </form>
    
            <p class="card-footer">Acesso monitorado e registrado</p>
        </div>
    </body>
    </html>


