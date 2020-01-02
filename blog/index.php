<?php

require 'config.php';
include 'src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                    <input class="campo-form" type="password" name="senha" id="senha" />
                    <form action="form-action.php" method="post">
                        <p>
                            <select name="cidades">
                                <option value=""></option>
                                <option value="scs">Dinhero</option>
                                <option value="sa">Cartão de Crédito</option>
                                <option value="sbc">cartão de Débito</option>
                            </select>
                            <input type="submit" value="Submit me!" />
                        </p>
                    </form>
                </nav>
            </div>
        </div>
        <a class="botao botao-block" href="inicial.php">Login</a>
    </div>
</body>

</html>