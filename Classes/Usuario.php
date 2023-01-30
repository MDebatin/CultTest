<?php
require 'Conexao.php';
class Usuario
{
    private $username;
    private $name;
    private $email;
    private $phone;
    private $password;
    private $errors = array();
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function cadastrarUsuario($dados) {
        // Função para cadastrar usuário
        $db = $this->conexao->conectar();
        $this->username = mysqli_real_escape_string($db, $dados['username']);
        $this->name = mysqli_real_escape_string($db, $dados['name']);
        $this->email = mysqli_real_escape_string($db, $dados['email']);
        $this->phone = mysqli_real_escape_string($db, $dados['phone']);
        $password_1 = mysqli_real_escape_string($db, $dados['password_1']);
        $password_2 = mysqli_real_escape_string($db, $dados['password_2']);

        if (empty($this->username)) {
            echo "<script>alert('Usuário é necessário!')</script>";
        }
        if (empty($this->name)) {
            echo "<script>alert('Nome é necessário!')</script>";
        }
        if (empty($this->email)) {
            echo "<script>alert('Email é necessário!')</script>";
        }
        if (empty($this->phone)) {
            echo "<script>alert('Telefone é necessário!')</script>";
        }
        if (empty($password_1)) {
            echo "<script>alert('Senha é necessária!')</script>";
        }
        if ($password_1 != $password_2) {
            echo "<script>alert('As senhas não coincidem!')</script>";
        }

        $user_check_query = "SELECT * FROM users WHERE username='$this->username' OR email='$this->email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        // Se o usuário já existir
        if ($user) {
            if ($user['username'] === $this->username) {
                echo "<script>alert('Usuário já cadastrado!')</script>";
            }

            if ($user['email'] === $this->email) {
                echo "<script>alert('Email já cadastrado!')</script>";
            }
        }

        // registra o usuário se não houver erros no formulário
        if (count($this->errors) == 0) {
            //criptografa a senha antes de salvar no banco de dados
            $this->password = password_hash($password_1, PASSWORD_DEFAULT);
            $query = "insert into users (username, name, email, phone, password) 
            values('$this->username','$this->name', '$this->email','$this->phone', '$this->password')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $this->username;
            $_SESSION['email'] = $this->email;
            $_SESSION['name'] = $this->name;
            $_SESSION['phone'] = $this->phone;
            $_SESSION['success'] = "Você está logado!";
            header('location: painel.php');
        }
    }


    // Função para retornar os erros
    public function getErrors() {
        return $this->errors;
    }

    // Função para fazer login do usuário
    public function loginUsuario($post) {
        $this->username = mysqli_real_escape_string($this->conexao->conectar(), $post['username']);
        $password = mysqli_real_escape_string($this->conexao->conectar(), $post['password']);

        // Verifica se o nome de usuário está vazio
        if (empty($this->username)) {
            echo "<script>alert('Email Necessário!')</script>";
        }

        // Verifica se a senha está vazia
        if (empty($password)) {
            echo "<script>alert('Senha Necessária!')</script>";
        }

        // Se não houver erros no formulário, tenta fazer login
        if (count($this->errors) == 0) {
            // Seleciona a senha do usuário no banco de dados
            $query = "SELECT password FROM users WHERE username='$this->username' LIMIT 1";
            $result = $this->conexao->query($query);
            if ($result->num_rows > 0) {
                $senhaCriptografada = $this->conexao->fetchAssoc($result)['password'];
                // Verifica se a senha digitada é válida
                if (password_verify($password, $senhaCriptografada)) {
                    // Seleciona as informações do usuário no banco de dados
                    $query = "SELECT * FROM users WHERE username='$this->username' LIMIT 1";
                    $results = $this->conexao->query($query);
                    $user = $this->conexao->fetchAssoc($results);
                    // Armazena as informações do usuário na sessão
                    $_SESSION['email'] = isset($user['email']) ? $user['email'] : "";
                    $_SESSION['phone'] = isset($user['phone']) ? $user['phone'] : "";
                    $_SESSION['username'] = isset($user['name']) ? $user['username'] : "";
                    $_SESSION['name'] = isset($user['name']) ? $user['name'] : "";
                    $_SESSION['success'] = "Você está logado!";
                    header('location: painel.php');
                }
                else {
                    echo "<script>alert('Usuário ou senha incorretos!')</script>";
                }
            }
            else {
                echo "<script>alert('Usuário ou senha incorretos!')</script>";
            }
        }
    }

    // Função para fazer logout do usuário
    public function logout() {
        session_start();
        session_destroy();
        header('Location: \CulturaBQ\index.html');
        exit();
    }


    // Esta função reseta a senha do usuário
    public function redefinirSenha() {
        if (isset($_POST['redefinir-senha'])) {
            $email = $this->conexao->real_escape_string($_POST['email']);
            $query = "SELECT email FROM usuarios WHERE email='$email'";
            $resultados = $this->conexao->query($query);

            if (empty($email)) {
                array_push($this->errors, "O seu email é obrigatório");
            }
            elseif ($this->conexao->num_rows($resultados) <= 0) {
                array_push($this->errors, "Desculpe, não existe nenhum usuário em nosso sistema com esse email");
            }
            $token = bin2hex(random_bytes(50));

            if (count($this->errors) == 0) {
                $sql = "INSERT INTO redefinir_senha(email, token) VALUES ('$email', '$token')";
                $resultados = $this->conexao->query($sql);

                $para = $email;
                $assunto = "Redefina sua senha em examplesite.com";
                $msg = "Olá, clique neste <a href='nova_senha.php?token=" . $token . "'>link</a> para redefinir sua senha em nosso site";
                $msg = wordwrap($msg, 70);
                $cabecalhos = "De: info@examplesite.com";
                mail($para, $assunto, $msg, $cabecalhos);
                header('location: pendente.php?email=' . $email);
            }
        }
        if (isset($_GET['token'])) {
            $_SESSION['token'] = $this->conexao->real_escape_string($_GET['token']);
        }
        if (isset($_POST['nova_senha'])) {
            $nova_senha = $this->conexao->real_escape_string($_POST['nova_senha']);
            $nova_senha_c = $this->conexao->real_escape_string($_POST['nova_senha_c']);

            $token = $_SESSION['token'];
            if (empty($nova_senha) || empty($nova_senha_c)) {
                array_push($this->errors, "Senha é obrigatória");
            }
            if ($nova_senha !== $nova_senha_c) {
                array_push($this->errors, "As senhas não correspondem");
            }
            if (count($this->errors) == 0) {
                $sql = "SELECT email FROM redefinir_senha WHERE token='$token' LIMIT 1";
                $result = $this->conexao->query($sql);
                if ($result->num_rows == 1) {
                    $email = $result->fetch_assoc()["email"];
                    $senha = password_hash($nova_senha, PASSWORD_DEFAULT);
                    $sql = "UPDATE usuarios SET password='$senha' WHERE email='$email'";
                    if ($this->conexao->query($sql)) {
                        $sql = "DELETE FROM redefinir_senha WHERE email='$email'";
                        $this->conexao->query($sql);
                        return true;
                    }
                }
            }
            return false;
        }
    }
}


