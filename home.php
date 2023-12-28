<?php 
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/csss.css">
    <title>home</title>
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
		<h1 class="h1">KIDZ HUB</h1> <h2 class="h2" >Kinder Garten | The Place Where Your Child Get Start Their Study</h2>
	</div>

	<div class="col-2 border  border-white">
		<img src="images/logo.png" style="width:250px;height:120px;" class="img">
	</div>

</div>
</div>

<img src="images/new.jpg" style="width:100%; height:5%";>

<div class="row mt-3">
	<h1 class="txt">The World's #1 <br>
		Online Primary Learning Platform
	</h1>
</div> <br>

<div class="container">
  	<div class="row">
		<div class="col-4 text-center border  border-white">
			<img src="images/div5.png" >
				<h3>The Best Teachers, Hands Down</h3>
				<p>
				Kidz Hub carefully vets teachers from the 
				U.S. and Canada. All teachers have a 
				bachelor’s degree and at least two
				years of experience.
				</p>
	</div>

	<div class="col-4 text-center border border-white" >
			<img src="images/div2o.png" style="width:180px; height:160px">
				<h3>Over 200 Million Classes Taught</h3>
					<p>
					Kidz Hub is the world leader of online 
					English learning. Our research- 
					backed curriculum has been developed over 
					nearly a decade.
					</p>
	</div>

	<div class="col-4 text-center border border-white" >
			<img src="images/div3o.png" style="width:150px; height:160px"> 
			<h3>Trusted by 1 Million Parents</h3>
				<p>
					Our secure, proprietary platform uses
				cutting-edge technology to make our
				classes effective, safe,
				and enjoyable.
				</p>
	</div>
  	</div>
</div>

	<div>
		<h6 class="txt"> Kidz Hub is on mission to<br> Unleash the Power of the World's Best Educators</h6>
	</div> <br> <br>

<div class="row text-center">
    <b><h5><a href ="work.php" style=" color:purple; font-family:Times New Roman; text-align:center;">Learn More About How It Works </a></h5></b>
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
