<?php
include("conexaoLogin.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

if (empty($email)) {
    echo "Preencha seu e-mail";
} elseif (empty($senha)) {
    echo "Preencha sua senha";
} else {
    $_email = $mysqli->real_escape_string($email);
    $_senha = $mysqli->real_escape_string($senha);

    $sql_code = "SELECT * FROM registrar WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        session_start();
        $_SESSION["id"] = $usuario["id"];
        $_SESSION["nome"] = $usuario["nome"];

        header("Location: telaPrincipal.html");
        exit();
    } else {
        echo "E-mail ou senha inválidos";
    }
}
?>*/