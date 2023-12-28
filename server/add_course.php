<?php

include "db.php";
session_start();

if (isset($_POST['add_course'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $class_duration = $_POST['class_duration'];
    $target_student_age = $_POST['target_student_age'];
    $consumption = $_POST['consumption'];
    $subject = $_POST['subject'];
    $grade = $_POST['grade'];
    $introduction = $_POST['introduction'];

    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_temp, "../admin/courses_imgs/$image");

    $title = mysqli_real_escape_string($connection, $title);
    $description = mysqli_real_escape_string($connection, $description);
    $class_duration = mysqli_real_escape_string($connection, $class_duration);
    $target_student_age = mysqli_real_escape_string($connection, $target_student_age);
    $consumption = mysqli_real_escape_string($connection, $consumption);
    $subject = mysqli_real_escape_string($connection, $subject);
    $grade = mysqli_real_escape_string($connection, $grade);
    $introduction = mysqli_real_escape_string($connection, $introduction);
    $image = mysqli_real_escape_string($connection, $image);

    $query = "INSERT INTO courses (title, description, class_duration, target_student_age, consumption, subject, grade, introduction, image) VALUES('{$title}', '{$description}', {$class_duration}, {$target_student_age}, '{$consumption}', '{$subject}', {$grade}, '{$introduction}', '{$image}')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $_SESSION['add_course'] = "New course added.";
    } else {
        $_SESSION['add_course'] = "Failed to add new course.";
    }

    header('Location: ../admin/add_course.php');
}