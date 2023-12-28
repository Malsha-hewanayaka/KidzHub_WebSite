<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/csss.css">
    <title>Teacher</title>
</head>
<body>
    
<div class="wrapper">
<?php include 'navbar.php'; ?>
</div>

<div class="container">
<div class="row">

	<div class="col-10 border  border-white">
    <h2 class ="techer_txt"  style="text-align:center; font-family:Times New Roman">Kidz Hub Teachers are the Best</h2>
	</div>

	<div class="col-2 border  border-white">
		<img src="images/logo.png" style="width:250px;height:120px;" class="img">
	</div>

</div>
</div>


<div class="row">
    <img src="images/tch.jpg" alt="">
</div>

<div class="row ">
    <h2 class ="techer_txt"  style="text-align:center; font-family:Times New Roman">Our Teachers Have Made Kidz Hub the #1 <br> Online Primary Learning Platform in the World</h2>
</div> <BR><BR>

<div class="container">
    <div class="row" >

        <div class="col-4 text-center border  border-white " >
            <img src="images/qua.jpg" style="width:130px; height:100px">
            <h3>Highly Qualified</h3>
                <P>All Kidz Hub teachers have a bachelor’s degree, and many have advanced degrees.</P>
        </div>

        <div class="col-4 text-center border  border-white">
        <img src="images/exp.png" style="width:140px; height:100px">
            <h3>Experienced</h3>
                <p>Our teachers have at least 2 years of teaching experience and are TESOL trained and certified</p>
        </div>
     
        <div class="col-4 text-center border  border-white">
        <img src="images/trust.jpg" style="width:100px; height:100px">
            <h3>Trusted by Parents</h3>
                <p>Kidz Hub carefully vets teachers and requires all to pass a rigorous background check.</p>
        </div>

    </div>
</div> <br> <br>

<div class="row">
    <h2 style="text-align:center; font-family:Lucida">Meet Our Teachers Here Now</h2> 
</div><br>

<div class="container">
    <div class="row text-center">
            <?php
                include "server/db.php";
                $query = "SELECT * FROM teachers";
                $result = mysqli_query($connection, $query);
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $grade = $row['grade'];
                            $name = $row['name'];
    
                            ?>
                                <div class="col-2 text-center border  border-white">
                                    <h5 style="background-color:#e6b3ff; font-family:Lucida"> <?php echo $grade ?><br> <a href="teacher.php?id=<?php echo $id ?>"><?php echo $name ?></a> </h5>
                                </div>
                            <?php
                        }
                    } else {
                        ?>
                            <div class="col-2 text-center border  border-white">
                                <h5 style="background-color:#e6b3ff; font-family:Lucida; padding: 12px 0 12px 0"> No teachers </h5>
                            </div>
                        <?php
                    }
                    
                }
            ?>
            
    </div>
</div>
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