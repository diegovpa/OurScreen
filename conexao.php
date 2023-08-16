<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "projetologin";

$conexao = mysqli_connect($host, $user, $pass, $banco );

    $nome = $_POST ["nome"];
    $apelido = $_POST ["apelido"];
    $email = $_POST ["email"];
    $senha = $_POST ["senha"];
    $celular = $_POST ["celular"];



if($conexao -> connect_error){
    die("Erro no envio dos dados" . $conexao->connect_error);
}

$sql = "INSERT INTO registrar (nome, apelido, email, senha, celular)
        VALUES ('$nome', '$apelido', '$email', '$senha', '$celular')";

if ($conexao->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $conexao->error;
}

mysqli_close($conexao);

header('Location: login.php');
exit();

?>