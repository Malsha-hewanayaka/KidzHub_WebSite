<?php

session_start();

$_SESSION['user_id'] = null;
$_SESSION['name'] = null;
$_SESSION['user_email'] = null;

header("Location: ../home.php");