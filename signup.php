<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/csss.css">
    <title>signup</title>
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
                    <center><img src="images/Reg.png" alt="" width="80%" height="600px" ></center>
                </div>
            </div>
        </div>
        <div class="col-3 "> <br>
            <h2 class ="text" style="font-family:Times New Roman; " > Registration Form </h2>

            <?php if (isset($_SESSION['user_added'])) { ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo $_SESSION['user_added']; ?>
                </div>
            <?php 
                    unset($_SESSION['user_added']); 
                } ?>

            <form action="server/register_users.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-family:Times New Roman; font-size:20px;">First Name</label>
                    <input type="text" class="form-control" name="fname" id="exampleInputfname" aria-describedby="fnameHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputlname" class="form-label" style="font-family:Times New Roman; font-size:20px;">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="exampleInputlname" aria-describedby="lnameHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="font-family:Times New Roman; font-size:20px;">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="font-family:Times New Roman; font-size:20px;">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label" style="font-family:Times New Roman; font-size:20px;">Confirm Password</label>
                    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2">
                </div>

                <div class="mb-3">
                    <label for="exampleInputaddress" class="form-label" style="font-family:Times New Roman; font-size:20px;">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputaddres" aria-describedby="addresHelp">
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn" type="submit" name="signup" style="font-family:Times New Roman; font-size:20px; background-color:#ffd9b3;">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

