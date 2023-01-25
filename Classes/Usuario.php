<?php
require 'Conexao.php';
class Usuario {
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
        $db = $this->conexao->conectar();
        $this->username = mysqli_real_escape_string($db, $dados['username']);
        $this->name = mysqli_real_escape_string($db, $dados['name']);
        $this->email = mysqli_real_escape_string($db, $dados['email']);
        $this->phone = mysqli_real_escape_string($db, $dados['phone']);
        $password_1 = mysqli_real_escape_string($db, $dados['password_1']);
        $password_2 = mysqli_real_escape_string($db, $dados['password_2']);

        if (empty($this->username)) {
            array_push($this->errors, "Usuário é necessário!");
        }
        if (empty($this->name)) {
            array_push($this->errors, "Nome é necessário!");
        }
        if (empty($this->email)) {
            array_push($this->errors, "Email é necessário!");
        }
        if (empty($this->phone)) {
            array_push($this->errors, "Telefone é necessário!");
        }
        if (empty($password_1)) {
            array_push($this->errors, "Senha é necessário!");
        }
        if ($password_1 != $password_2) {
            array_push($this->errors, "As senhas não coincidem!");
        }

        $user_check_query = "SELECT * FROM users WHERE username='$this->username' OR email='$this->email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $this->username) {
                array_push($this->errors, "<p class='tetx_login'>Usuário já cadastrado!</p>");
            }

            if ($user['email'] === $this->email) {
                array_push($this->errors, "<p class='tetx_login'>Email já cadastrado!</p>");
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($this->errors) == 0) {
            $this->password = md5($password_1);//encrypt the password before saving in the database

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

    public function getErrors() {
        return $this->errors;
    }

    public function loginUsuario($post) {
        $db = $this->conexao->conectar();
        $this->username = mysqli_real_escape_string($this->db, $post['username']);
        $password = mysqli_real_escape_string($this->db, $post['password']);

        if (empty($this->username)) {
            array_push($this->errors, "<p class='tetx_login'>Usuário necessário!");
        }
        if (empty($password)) {
            array_push($this->errors, "<p class='tetx_login'>Senha necessária!");
        }

        if (count($this->errors) == 0) {
            $query = "SELECT password FROM users WHERE username='$this->username' LIMIT 1";
            $result = mysqli_query($this->db, $query);
            $senhaCriptografada = mysqli_fetch_assoc($result)['password'];
            if (password_verify($password, $senhaCriptografada)) {
            $query = "SELECT * FROM users WHERE username='$this->username' LIMIT 1";
            $results = mysqli_query($this->db, $query);
            $user = mysqli_fetch_assoc($results);

            $_SESSION['username'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['success'] = "You are now logged in";
            header('location: painel.php');
            } else {
                array_push($this->errors, "<p class='tetx_login'>Usuário ou senha incorretos!");
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.html');
        exit();
    }
}
