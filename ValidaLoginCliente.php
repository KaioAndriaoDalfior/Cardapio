<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] === 'cliente' && $_POST['password'] === 'cliente') {
        header("Location: PaginaInicial.php");
        exit();
    } else {
        header("Location: LoginCliente.php");
        exit();
    }
}
?>
