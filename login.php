<?php session_start() ?>
<?php
    if (isset($_SESSION['user_id'])) {
        header("Location: home.php");
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
    <title>login</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="images/logo.png" style="width:320px;height:120px; float: right">
            </div>
        </div>
        <div class="row mt-3">
            
            <div class="col-9">
                <div class="row">
                    
                    <div class="col-12">
                        <img src="images/login.jpg" style="float: left" alt="" width="100%">
                    </div>
                </div>
            </div>
            <div class="col-3 mt-5"><br><br>
                <div class="mt-5"></div>
                <h2 class ="text" style="font-family:Times New Roman; " > STUDENT LOGIN </h2>
                <?php if (isset($_SESSION['login_err'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $_SESSION['login_err']; ?>
                    </div>
                <?php 
                        unset($_SESSION['login_err']); 
                    } ?>
                
                <?php if (isset($_SESSION['login'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['login']; ?>
                    </div>
                <?php 
                        unset($_SESSION['login']); 
                    } ?>
                <form action="server/login_user.php" method="POST">
                    

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-family:Times New Roman; font-size:20px;">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label" style="font-family:Times New Roman; font-size:20px;" >Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn " type="submit" style="font-family:Times New Roman; font-size:20px; background-color:#ffd9b3;" name="login">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>



</body>
</html>