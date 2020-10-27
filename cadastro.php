<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Entre ou Cadastra-se</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/global.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="card">
            <h1>CADASTRE-SE</h1>

            <form action="cadastroUsuario.php" method="post">

                <input type="text" name="nome" placeholder="nome">
                <input type="email" name="email" placeholder="e-mail">
                <input type="password" name="senha" placeholder="senha">
                <input type="password" nome="conf_senha" placeholder="reply senha">

                <input type="submit">CADASTRE-SE</button>

            </form>

        </div>
    </main>              
</body>
</html>