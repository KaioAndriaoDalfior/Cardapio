<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] === 'lanchonete' && $_POST['password'] === 'lanchonete') {
        header("Location: DashboardLanchonete.php");
        exit();
    } else {
        header("Location: LoginLanchonete.php");
        exit();
    }
}
?>
