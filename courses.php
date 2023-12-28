<?php session_start(); ?>
<?php
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
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
    <title>courses</title>
</head>
<body>
<header>
	<div class="wrapper">
    <?php include 'navbar.php'; ?>
		</nav>
	</div>
</header>

<div class="container">
<div class="row">
<div class="col-10 border  border-white">
		<h2 style="text-align:center; font-family:Lucida; font-size:30px; text-transform:uppercase;font-weight:bold;">Please choose a course that interests you</h2>
	</div>

	<div class="col-2 border  border-white">
		<img src="images/logo.png" style="width:250px;height:120px;" class="img">
	</div>

</div>
</div>

<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-3 text-center border  border-white">
                
                    <select class="form-select" aria-label="Default select example" name="age" required>
                        <option value="">Select Your Age</option>
                        <option value="5">5 Years</option>
                        <option value="6">6 Years</option>
                        <option value="7">7 Years</option>
                        <option value="8">8 Years</option>
                        <option value="9">9 Years</option>
                        <option value="10">10 Years</option>
                    </select> 
            </div>

            <div class="col-3 text-center border  border-white">
                    <select class="form-select" aria-label="Default select example" name="subject" required>
                        <option value="">Select Subject</option>
                        <option value="writing">Writing</option>
                        <option value="speaking">Speaking</option>
                        <option value="reading">Reading</option>
                        <option value="story Time">Story Time</option>
                        <option value="sinhala">Sinhala</option>
                        <option value="english">English</option>
                        <option value="mathematics">Mathematics</option>
                        <option value="environment">Environment</option>
                    </select> 
            </div>

            <div class="col-3 text-center border  border-white">
                    <select class="form-select" aria-label="Default select example" name="grade" required>
                        <option value="">Select Your Grade</option>
                        <option value="Kindergarten">Kindergarten</option>
                        <option value="1">Grade 1</option>
                        <option value="2">Grade 2</option>
                        <option value="3">Grade 3</option>
                        <option value="4">Grade 4</option>
                        <option value="5">Grade 5</option>
                    
                    </select> 
            </div>

            <div class="col-1 text-center border  border-black">
                <input class="btn " type="submit" value="Submit" name="search_btn">
            </div>
        </div>
    </form>
</div> <br>

<div class="container">
    <div class="row">
        <?php
            include "server/db.php";

            if (isset($_POST['search_btn'])) {
                $age = $_POST['age'];
                $subject = $_POST['subject'];
                $grade = $_POST['grade'];
                $query = "SELECT * FROM courses WHERE target_student_age={$age} AND subject LIKE '%$subject%' AND grade = $grade";
            } else {
                $query = "SELECT * FROM courses";
            }
            $result = mysqli_query($connection, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $image = $row['image'];

                    ?>
                    <div class="col-3 text-center mt-3 border  border-white">
                        <div class="card" style="width: 18rem; background-color:#ffe6cc">
                            <div class="card-body">
                                <img src="admin/courses_imgs/<?php echo $image; ?>" style="height:130px; width:170px; " >
                                <h5 class="card-title" style="font-family:Lucida; font-size:23px; font-weight:bold"><?php echo $title; ?></h5>
                                <p><?php echo $description; ?></p>
                                <a href="course.php?course_id=<?php echo $id; ?>" class="btn" style="background-color:#ffbb99">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="alert alert-primary" role="alert">
                    No any courses
                </div>
                <?php
            }
        ?>
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