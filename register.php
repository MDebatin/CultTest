<?php
require_once 'autoload.php';

$usuario = new Usuario();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
</head>
<body>
<header>
    <div class="box_header">
        <div class="info_header">
            <span class="namepag">Conselho Municipal de Cultura - Brusque - SC</span>
            <img class="logobq" src="image/logo_bq.png"/>
            <span class="contato">conselho@fcbrusque.sc.gov.br</span>
        </div>
        <div class="faixa_menu">
            <div class="logo">
                <img class="logo_name" src="image/logo.png"/>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li> <a style="color: white; text-decoration: none;" href="index.html">HOME</a></li>
                        <li> <a style="color: white; text-decoration: none;" href="logon.php">LOGIN</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<form action="register.php" method="post">
    <label for="username">Nome de usuário:</label>
    <input type="text" name="username" required>

    <label for="name">Nome completo:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="phone">Telefone:</label>
    <input type="tel" name="phone" required>

    <label for="password_1">Senha:</label>
    <input type="password" name="password_1" required>

    <label for="password_2">Confirme a senha:</label>
    <input type="password" name="password_2" required>

    <input type="submit" name="reg_user" value="Cadastrar">

    <p class="tetx_login">
        Já possui conta? <a class="tetx_login" href="logon.php">Entre</a>
    </p>
</form>

<?php
if (isset($_POST['reg_user'])) {
    $usuario = new Usuario();
    $usuario->cadastrarUsuario($_POST);
    if(count($usuario->getErrors()) > 0) {
        var_dump($usuario->getErrors());
    }
}
?>

<footer>
    <div class="fim">
        <h1>Contato: conselho@fcbrusque.sc.gov.br</h1>
        <p>Página criada pelos alunos da segunda fase de Sistemas de Informação - Unifebe - Brusque - SC</p>
    </div>
</footer>
</body>
</html>