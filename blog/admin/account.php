<?php

require '../config.php';
include '../src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div id="container">
        <h1>Login</h1>
        <div>
            <div id="artigo-admin">
                <nav>
                <label for=""><b>Digite seu usuario</b></label>
                <input class="campo-form" type="text" name="login" id="login" />
                <label for=""><b>Digite sua senha</b></label>
                <input class="campo-form" type="text" name="senha" id="senha" />
                </nav>
            </div>
        </div>
        <a class="botao botao-block" href="adicionar-artigo.php">Login</a>
    </div>
</body>

</html>