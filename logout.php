<?php
/* Basic logout script that redirects back to the previous page */
session_start();
unset($_SESSION['vu']);
$uType = $_SESSION['uType'];
$_SESSION['ref'] = str_replace("_$uType","",$_SESSION['ref']);
header("Location: ".$_SESSION['ref']);
?>