<?php
session_start();
session_destroy();
header("Location:./login.html");
$_SESSION['logged_in'] = false;
exit();
?>
