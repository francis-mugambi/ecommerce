<?php

session_start();
$_SESSION = array();
header("location:dashboard.php");

exit();