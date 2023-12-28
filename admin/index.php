<?php 
    session_start(); 
    ob_start();

    if (isset($_SESSION['admin_log'])) {
        header("Location: dashboard.php");
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
    <div class="col-3 border  border-white"></div>

    <div class="col-6 border  border-white">
        <?php if (isset($_SESSION['admin_err'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['admin_err']; ?>
            </div>
        <?php 
                unset($_SESSION['admin_err']); 
            } ?>
        <div class="card">
        <div class="card-body">

        <form action="" method="POST">

        <div class="form-group">
        <label for="username">User Name</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
        </div><br>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div><br>

        <button type="submit" class="btn" style = "background-color:#33004d; color:white;" name="admin_log">Submit</button>
        </form>
    </div>
    </div>
    </div>
    

    <div class="col-3 border  border-white"></div>

</div>
</div>



    
</body>
</html>

<?php
    if (isset($_POST['admin_log'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "malsha") {
            if ($password === "malsha@uwu") {
                $_SESSION['admin_log'] = "log";
                header("Location: dashboard.php");
            } else {
                $_SESSION['admin_err'] = "Wrong credentials";
                header("Location: index.php");
            }
        } else {
            $_SESSION['admin_err'] = "Wrong credentials";
            header("Location: index.php");
        }
    }
?>