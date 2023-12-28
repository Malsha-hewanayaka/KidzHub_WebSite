<?php

session_start();
$_SESSION['admin_log'] = null;

header('Location: ../home.php');