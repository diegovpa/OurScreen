
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="all">
        <div class="logo">
            <img src="./imagens/logo ph copiar.png" alt="" class="LogoImg">

            <div class="container">
                <form action="loginn.php" method="post">
                    <h2>Login</h2>
                    <div class="i">
                        <div class="input-field">
                            <label for="email" class="email">Email</label>
                            <input type="email" id="email" placeholder="Insira seu email" name="email">
                        </div>


                        <div class="input-field">
                            <label for="senha" class="senha">Senha</label>
                            <input type="password" id="senha" placeholder="Insira sua senha" name="senha">
                        </div>
                    </div>


                    <div class="links">
                        <a href="#">
                            <p>Esqueci a senha</p>
                        </a>
                    </div>
                    <div class="botoes">
                        <div class="entrar">
                            <button class="ent">Entrar</button>
                        </div>

                        <div class="criar">
                            <button class="cr">Criar conta</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>