<?php
// filepath: Control/logout.php
session_start();
session_unset();
session_destroy();
header("Location: ../View/login.php");
exit();
?>