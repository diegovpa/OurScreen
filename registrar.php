<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="rgst.css">
   

</head>
<body>
    <header>
        <div class="all">
            <div class="logo">
                <img src="./imagens/logo ph copiar.png" alt="" class="LogoImg">
            </div>
        </div>

        <div class="all2">

            <div class="conts">

                <div class="container">

                    <h2>Registrar</h2>
                    <div class="i">
                        <form action="conexao.php" method="post">

                            <div class="input-field">
                                <label for="nome" class="nome">Nome completo</label>
                                <input type="nome" id="nome" name="nome" placeholder="Insira seu nome">
                            </div>

                            <div class="input-field">
                                <label for="nick" class="nick">Apelido</label>
                                <input type="nome" id="nick" name="apelido" placeholder="Insira um apelido">
                            </div>

                            <div class="input-field">
                                <label for="email" class="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Insira seu email">
                            </div>

                            <div class="input-field">
                                <label for="senha" class="senha">Senha</label>
                                <input type="password" name="senha" id="senha1" placeholder="Crie uma senha">
                            </div>

                            <div class="input-field">
                                <label for="senha" class="senha2">Confirme sua senha</label>
                                <input type="password" id="senha2" onblur="verificarSenhas()" placeholder="Insira seu nome">
                            </div>

                            <div class="input-field">
                                <label for="celular" class="celular">Celular</label>
                                <input type="tel" id="celular" name="celular" placeholder="Insira um numero de celular">
                            </div>
                    </div>
                </div>
                <div class="D">
                    <div class="container2">
                        <div class="minicont">
                        
                            <div class="I">
                                <div class="slvImagem">
                                    <label for="uploadInput" class="upload-button">
                                        Adicionar Foto de Perfil
                                        <input type="file" id="uploadInput" accept="image/*"
                                            onchange="previewImage(event)">
                                    </label>
                                </div>
                                <div class="profile-image">
                                    <img id="profileImage" src="default-avatar.png">

                                </div>
                            </div>
                            <script>
                                function previewImage(event) {
                                    var input = event.target;
                                    var reader = new FileReader();
                                    reader.onload = function () {
                                        var profileImage = document.getElementById('profileImage');
                                        profileImage.src = reader.result;
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            </script>
                        </div>
                    </div>
                    <div class="termo">
                        <a href="#">
                            <p>Termos</p>
                        </a>
                    </div>
                    <div class="CR">

                      <input type="submit" value="Criar conta" href="login.html">

                    </div>
                    </form>
                </div>
            </div>

        </div>

        </div>

        </div>
    </header>

    <script src="registrar.js"></script>

</body>