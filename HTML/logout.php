<?php
session_start();
unset($_SESSION['username']);
session_destroy();

header("Location: ../HTML/log.php");
exit;
?>