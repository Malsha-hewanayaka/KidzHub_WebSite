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
    <title>add_teacher</title>
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
            <?php if (isset($_SESSION['add_teacher'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['add_teacher']; ?>
                </div>
            <?php 
                    unset($_SESSION['add_teacher']);
                } ?>
            <form action="../server/add_teacher.php" method="POST">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
                </div> <br>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age">
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                </div> <br>

                <div class="form-group">
                    <label for="number">Mobile Number</label>
                    <input type="text" class="form-control" id="number" name="mobno" placeholder="Enter Mobile Number">
                </div> <br>

                <div class="form-group">
                    <label for="grad_from">Graduated From</label>
                    <input type="text" class="form-control" id="grad_from" name="grad_from" placeholder="Enter University">
                </div> <br>

                <div class="form-group">
                    <label for="grade">Grade</label>
                    <input type="text" class="form-control" id="grade" name="grade" placeholder="Enter Grade">
                </div> <br>

                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label for="qualification">Qualification</label>
                            <textarea name="qualification" id="" cols="20" rows="8" class="form-control" placeholder="Your Qualification"></textarea>
                        </div>

                        <div class="col-6">
                            <label for="experiences">Experiences</label>
                            <textarea name="experience" id="" cols="20" rows="8" class="form-control" placeholder="Your Experiences"></textarea>
                        </div>
                    </div>
                </div> <br>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="20" rows="8" class="form-control" placeholder="Description"></textarea>
                </div>
                <br>

                <button type="submit" class="btn" style = "background-color:#33004d; color:white;" name="add_teacher">Submit</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>
