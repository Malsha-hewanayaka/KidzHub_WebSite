<?php

include "db.php";
session_start();

if (isset($_POST['add_teacher'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $grad_from = $_POST['grad_from'];
    $grade = $_POST['grade'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];

    $query = "INSERT INTO teachers(name, age, email, mobno, qualification, grad_from, experience, grade, description) VALUES('{$name}', '{$age}', '{$email}', '{$mobno}', '{$qualification}', '{$grad_from}', '{$experience}', '{$grade}', '{$description}')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $_SESSION['add_teacher'] = "New teacher registered.";
    } else {
        $_SESSION['add_teacher'] = "Failed to register new teacher.";
    }

    header('Location: ../admin/add_teacher.php');
}