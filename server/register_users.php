<?php
include "db.php";
session_start();
if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($address) && !empty($password) && !empty($cpassword)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($password === $cpassword) {
                if (strlen($password) > 8) {
                    // echo "HELLO";
                    $fname = mysqli_real_escape_string($connection, $fname);
                    $lname = mysqli_real_escape_string($connection, $lname);
                    $email = mysqli_real_escape_string($connection, $email);
                    $address = mysqli_real_escape_string($connection, $address);
                    $password = mysqli_real_escape_string($connection, $password);

                    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
                    $insert_user = "INSERT INTO users(fname, lname, email, address, password) VALUES('{$fname}', '{$lname}', '{$email}', '{$address}', '{$password}')";
                    $insert_user_query = mysqli_query($connection, $insert_user);
                    if ($insert_user_query) {
                        $_SESSION['login'] = "Login Here.";
                        header("Location: ../login.php");
                    }else {
                        $_SESSION['user_added'] = "User not exists.";
                        header("Location: ../signup.php");
                    }
                            
                }else {
                    $_SESSION['user_added'] = "Password must be 8 characters length";
                    header("Location: ../signup.php");
                }
                
            }else{
                $_SESSION['user_added'] = "Password mism atch";
                header("Location: ../signup.php");
            }
        }else{
            $_SESSION['user_added'] = "Invalid email.";
            header("Location: ../signup.php");
        }
    }else{
        $_SESSION['user_added'] = "Every field is required";
        header("Location: ../signup.php");
    }
}
?>