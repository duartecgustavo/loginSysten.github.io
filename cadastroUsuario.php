<?php

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha){
    print 'Cadastro realizado com sucesso!';
} else if ($nome <= 3){
    print 'Digite uma nome valido!';
}else if ($senha != $conf_senha){
    print 'As senhas devem ser iguais!';
} else if (strlen($email) <= 3){
    print 'Digite um e-mail valido!';
} else if ($senha <= 3){
    print 'Digite uma senha valida!';
}