<?php
    include '../model/pessoa.php';
    $usuario = new pessoa('joão', 'admin', 'admin123');

    $login = $_POST['username'] ?? '';
    $senha = $_POST['password'] ?? '';

    if ($login === $usuario->getLogin() && $senha === $usuario->getSenha()) {
        echo 'Seja bem-vindo!';
    } else {
        echo 'Usuário ou senha inválidos.';
    }
?>