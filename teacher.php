<?php
    if (isset($_GET['id'])) {
        include "server/db.php";
        $query = "SELECT * FROM teachers WHERE id=".$_GET['id'];
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        
        $name = $row['name'];
        $age = $row['age'];
        $email = $row['email'];
        $mobno = $row['mobno'];
        $qualification = $row['qualification'];
        $grad_from = $row['grad_from'];
        $experience = $row['experience'];
        $description = $row['description'];
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
    <title>Dia Teacher</title>
</head>
<body> <br><br>
    <div class="container">
        <div class="row">
            <h1 style= "font-family:Times New Roman; color:#39004d; font-size:70px">HELLO KIDDOS!</h1>

                <div class="col-4 text-center border  border-white">
                <img src="images/pr.png" style="width:140; height:120%">   
                </div>

                <div class="col-3 text-center border  border-white">
                    <img src="images/wlcm.jpg" style="height:70px; weidth:50px">
                    <p style="font-size:17px"> <br><?php echo $description; ?></p>   
                </div>

                <div class="col-5 text-center border  border-white">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Age</th>
                            <td><?php echo $age; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo $email; ?></td>
                        </tr>

                        <tr>
                            <th scope="row">Contact number</th>
                            <td><?php echo $mobno; ?></td>
                        </tr>

                        <tr>
                            <th scope="row">Qualification</th>
                            <td><?php echo $qualification; ?></td>
                        </tr>

                        <tr>
                            <th scope="row">Graduated From</th>
                            <td><?php echo $grad_from; ?><br></td> 
                        </tr>

                        <tr>
                            <th scope="row">Experience</th>
                            <td><?php echo $experience; ?></td>
                        </tr>
                    </tbody>
                </table>  
        </div> 

    
            
        </div>
    </div> <br><br>

<div class="card text-center">
 <div class="card-body">
    <h5 class="card-title">Powerd By Kidz Hub</h5>
    <p class="card-text">Join  With Us to Get Ultimate Learning Experience</p>
    <a href="teachers.php" class="btn" style = background-color:#d9b3ff;>Go Back</a>
</div>
</div>
</body>
</html>