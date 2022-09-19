<?php
session_start();
//unset($_SESSION);
session_unset();
//print_r($_SESSION);
session_destroy();
header("location:index.php");
?>
