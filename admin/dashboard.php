<?php 
    session_start(); 
    ob_start();
    include "../server/db.php";

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
    <title>index</title>
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


<div class="col-9 text-center border border-white">
    <div class="row">
        <div class="col-4 border border-white" >
            <div class="card" style="width: 18rem; background-color:#f2e6ff ">
                <div class="card-body">
                    <h5 class="card-title">Teachers</h5>
                    <img src="images/female.png" style= "height:50px; width:50px">
                    <?php 
                        $query = "SELECT * FROM teachers";
                        $res = mysqli_query($connection, $query);
                        $count = mysqli_num_rows($res);
                        echo "<h6>Count ".$count."</h6>";
                    ?>
                </div>
            </div>
        </div>

        <div class="col-4 border border-white" >
        <div class="card" style="width: 18rem; background-color:#f2e6ff ">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <img src="images/user.png" style= "height:50px; width:50px">
                <?php 
                    $query = "SELECT * FROM users";
                    $res = mysqli_query($connection, $query);
                    $count = mysqli_num_rows($res);
                    echo "<h6>Count ".$count."</h6>";
                ?>
            </div>
        </div>
        </div>

        <div class="col-4 border border-white" >
        <div class="card" style="width: 18rem; background-color:#f2e6ff ">
            <div class="card-body">
                <h5 class="card-title">Feedback</h5>
                <img src="images/feedback.png" style= "height:50px; width:50px">
                <?php 
                    $query = "SELECT * FROM feedbacks";
                    $res = mysqli_query($connection, $query);
                    $count = mysqli_num_rows($res);
                    echo "<h6>Count ".$count."</h6>";
                ?>
            </div>
        </div>
        </div>
</div>
</div>



    
</body>
</html>