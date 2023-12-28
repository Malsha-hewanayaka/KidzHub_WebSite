<?php

include "db.php";
session_start();
if (isset($_POST['send'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $message = $_POST['message'];

    $query = "INSERT INTO feedbacks (fname, lname, email, mobno, message) VALUES('{$fname}', '{$lname}', '{$email}', '{$mobno}', '{$message}')";
    $result = mysqli_query($connection, $query);
    if($result) {
        $_SESSION['feedback'] = "Feedback Saved.";
    } 
    header('Location: ../contact.php');
}