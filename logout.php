<?php
session_start();
$_SESSION['login_user'] = NULL;
session_destroy();
header("Location:login-page.php");
?>