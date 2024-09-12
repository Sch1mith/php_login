<?php
    $login = $_POST['nome'];
    $senha = $_POST['senha'];
    $login_correto = 'admin';
    $senha_correta = 'admin123';
    if ($login == $login_correto && $senha == $senha_correta){
        echo 'seja bem vindo';
    }
?>