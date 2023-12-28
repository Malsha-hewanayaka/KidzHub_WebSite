<?php 
    session_start(); 
    ob_start();

    if (!isset($_SESSION['admin_log'])) {
        header("Location: index.php");
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
    <title>Add Course</title>
</head>
<body>

<div class="container">
<div class="row">

	<div class="col-10 border  border-white">
		<h1 class="h1">KIDZ HUB</h1> <h2 class="h2" >Kinder Garten | The Place Where Your Child Get Start Their Study</h2>
	</div>

	<div class="col-2 border  border-white">
		<img src="images/logo.png" style="width:250px;height:120px;" class="img">
	</div>

</div>
</div> <br><br>


<div class="container">
    <div class="row">
        <div class="col-3 text-center border border-white" style="height:650px">
        <p> <?php include 'sidebar.php' ?> </p>
                    
        </div>

        <div class="col-9 border border-white" >
            <?php if (isset($_SESSION['add_course'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['add_course']; ?>
                </div>
            <?php 
                    unset($_SESSION['add_course']);
                } ?>
            <form action="../server/add_course.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title">
                </div> <br>

                <div class="form-group">
                    <label for="age">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="8" placeholder="Enter Description"></textarea>
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputEmail1">Class Duration (minutes)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="class_duration" placeholder="Enter Class Duration">
                </div> <br>

                <div class="form-group">
                    <label for="number">Target Student Age</label>
                    <input type="text" class="form-control" id="number" name="target_student_age" placeholder="Enter Target Student Age">
                </div> <br>

                <div class="form-group">
                    <label for="grad_from">Consumption</label>
                    <input type="text" class="form-control" id="grad_from" name="consumption" placeholder="Enter Consumption">
                </div> <br>

                <div class="form-group">
                    <label for="grade">Subject</label>
                    <input type="text" class="form-control" id="grade" name="subject" placeholder="Enter Subject">
                </div> <br>

                <div class="form-group">
                    <label for="grade">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" placeholder="Enter Grade">
                </div> <br>

                <div class="form-group">
                    <label for="introduction">Introduction</label>
                    <textarea name="introduction" id="introduction" cols="20" rows="8" class="form-control" placeholder="Introduction"></textarea>
                </div>
                <br>

                <div class="form-group">
                    <label for="grade">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div> <br>

                <button type="submit" class="btn" style = "background-color:#33004d; color:white;" name="add_course">Submit</button><br>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>
