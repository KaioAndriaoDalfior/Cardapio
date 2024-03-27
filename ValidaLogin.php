<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $valid_username = "user";
        $valid_password = "senha";

        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === $valid_username && $password === $valid_password) {
            header("Location: PaginaInicial.php");
            exit();
        } else {
            header("Location: index.php?error=invalid_credentials");
            exit();
        }
    }
}
header("Location: index.php");
exit();
?>
