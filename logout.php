<?php
session_start();
$login = false;
session_unset();
session_destroy();

header("location: /adminlogin/index.php");
exit;
?>