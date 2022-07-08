<?php
session_start();
$login = false;
session_unset();
session_destroy();

header("location: welcome.php");
exit;
?>