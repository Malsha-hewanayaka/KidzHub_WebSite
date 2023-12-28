<?php session_start(); ?>
<?php
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
    }

    include "server/db.php";
    if (isset($_GET['course_id'])) {
        $course_id = $_GET['course_id'];
        $query = "SELECT * FROM courses WHERE id = $course_id";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
        $class_duration = $row['class_duration'];
        $target_student_age = $row['target_student_age'];
        $consumption = $row['consumption'];
        $subject = $row['subject'];
        $grade = $row['grade'];
        $introduction = $row['introduction'];
        $image = $row['image'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/csss.css">
    <title>subject</title>
</head>
<body>
<header>
	<div class="wrapper">
    <?php include 'navbar.php'; ?>
	</div>
</header>

<div class="container">
<div class="row">

	<div class="col-10 border  border-white">
    <h1  style="text-align:center; font-family:Times New Roman">Know in Detail About Your Subject</h1>
	</div>

	<div class="col-2 border  border-white">
		<img src="images/logo.png" style="width:250px;height:120px;" class="img">
	</div>

</div>
</div>

<div class="container text-center">
    <div class="row">

        <div class="col-2 border  border-white">
        </div>

        <div class="col-6 " style ="background-color: #f9e6ff; padding:19px 1px 19px 1px; ">
            <h3 style="text-align:center; font-family:Times New Roman">Writing Skills</h3>

            <h6>
            <div class="desc" style="text-align:center; font-family:Times New Roman; font-size:20px">
                <?php echo $description; ?>
            </div>
            </h6>
            </div>

        <div class="col-2 border  border-white">
            <img src="images/subj.png"  style="width:100%; height:100%">
        </div>
</div>
</div> <br><br>

<div class="container">
<div class="row">
    <div class="col-1 text-center border  border-white"></div>

        <div class="col-3 text-center border  border #f2f2f2"><br>
            <img src="images/clk.jpeg" style="width:30%; height:40%">
            <h4>Class Duration</h4>
            <p style= "text-align:left; font-size: 18px;"><?php echo $class_duration; ?> minutes </p>
        </div>

        <div class="col-3 text-center border  border #f2f2f2"> <br>
            <img src="images/std.png" style="width:30%; height:40%">
            <h4> Target Students</h4>
            <p style= "text-align:left; font-size: 18px">Student age: <?php echo $target_student_age; ?> years old </p>
        </div>

        <div class="col-3 text-center border  border #f2f2f2"> <br>
        <img src="images/cln.jpg" style="width:30%; height:40%">
            <h4>Class Consumption</h4>
            <p style= "text-align:left; font-size: 18px"><?php echo $consumption; ?></p>
        </div>

        <div class="col-1 text-center border  border-white"></div>
</div>
</div> <br><br>

<div class="container">
<div class="row">

    <div class="col-12  border  border-white" style ="background-color: white">
        <h3 style ="background-color: white; font-family:Times New Roman">Course Introduction</h3>
        <div class="col-12  border  border-white " style ="background-color: #f2f2f2; padding:19px 1px 19px 1px; font-family:Times New Roman; font-size:17px ">
            <h4 style= "text-align:left; font-family:Times New Roman">Detailed Introduction </h4>
                <p>
                <?php echo $introduction; ?>
                </p>
        </div>
    </div>
</div>
</div> <br><br>


<div class="container">
<div class="row">

<div class="col-12 text-center  border  border-white" style ="background-color: white; font-family:Times New Roman"> <h3>Class Procedures </h3></div>
<div class="col-3"></div>
        <div class="col-3 text-center border  border-black " style =" font-family:Times New Roman; font-size:17px ">
            <img src="images/lap.png" style="width:20%; height:50%">  
             <h4>Pre-Class</h4>
             <h5>preview the class material</h5>
        </div>
        <div class="col-3 text-center  border  border-black " style ="font-family:Times New Roman; font-size:17px ">
            <img src="images/std.jpeg" style="width:20%; height:50%"> 
            <h4>In-Class</h4>
             <h5>45 minutes of interactive learning </h5>
        </div>

</div>
</div>

<br><br>

<footer>
		<section class="footer pt-2 pb-2">
				<p>Powerd By: Kidz Hub <br>
				©2022 Kidzhub |
				Privacy Policy  <br>
				For Users, please visit www.kidzhub.com.cn.
				</p>
			</section>
</footer>


</body>
</html>