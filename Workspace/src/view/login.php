<?php
    include '../model/pessoa.php';
    $usuario = new pessoa('joão', 'admin', 'admin123');

    $login = $_POST['username'] ?? '';
    $senha = $_POST['password'] ?? '';

    if ($login === $usuario->$login && $senha === $usuario->$senha) {
        echo 'Login bem-sucedido!';
    } else {
        echo 'Usuário ou senha inválidos.';
    }
?>