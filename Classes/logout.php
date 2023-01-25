<?php
require_once 'Usuario.php';
session_start();
$usuario = new Usuario();
$usuario->logout();
?>