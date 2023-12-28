<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/csss.css">
    <title>contact</title>

    <style>
        .msg{
            background-color: #26004d;
            color:white;
            padding: 15px 32px;
            text-align: center;
            align: right;
        }
    </style>
</head>
<body style = "background-color: #f2f2f2">

<header>
	<div class="wrapper">
        <?php include 'navbar.php'; ?>
	</div>
</header>

<h2 class="card-title" style="font-family:Lucida; font-size:38px; font-weight:bold; text-align:center">Contact Us</h2>
<p style="font-family:Lucida; font-size:20px; text-align:center; color:gray">Any Questions or ramarks? Just Write a Message For Us</p> <br><br>
    
<div class="container">
    <div class="row">
        <div class="col-1 text-center"></div>
            <div class="col-3 text-center  border  border-white" style="background-color:#26004d; border-radius:15px"> <br><br>
            <h4 style= "color:white">Contact Information</h4> <br>

            <p style= "color:white; ">Fill up the form and our team will get back to you within 24 hours </p><br><br>

            <p style= "color:white; text-align:left">Contact Us:<br> <br>
                Tel: +94 1123456754 <br>
                Email: kidzhub@gmail.com
            </p> <br><br>

            <p style= "color:white; text-align:left"> Find Us On:<br> 
                <div class="container">
                <div class="row text-center">
                
                    <div class="col-2 text-center" style="background-color:gray; padding:5px 0px 5px 0px" ><img src="images/fb.png" style = "height:20px;  width:20px"></div>
                    <div class="col-2 text-center" style="background-color:gray; padding:5px 0px 5px 0px" ><img src="images/yt.png" style = "height:20px;  width:20px"></div>
                    <div class="col-2 text-center" style="background-color:gray; padding:5px 0px 5px 0px" ><img src="images/li.png" style = "height:20px;  width:20px"></div>
                    <div class="col-2 text-center" style="background-color:gray; padding:5px 0px 5px 0px" ><img src="images/in.png" style = "height:20px;  width:20px"></div>
                    <div class="col-2 text-center" style="background-color:gray; padding:5px 0px 5px 0px" ><img src="images/tw.png" style = "height:20px;  width:20px"></div>
                 
                </div>
                </div>

            </p>


                
            </div>
            <div class="col-7 text-center  ">
                <?php if (isset($_SESSION['feedback'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['feedback']; ?>
                    </div>
                <?php 
                        unset($_SESSION['feedback']); 
                    } ?>
                <form action="server/feedback.php" style="background-color:white" method="POST"> <br>
                    <label for="fname">First name:</label> 
                    <input type="text" id="fname" name="fname" required> <br> <br>

                    <label for="fname">Last name:</label>
                    <input type="text" id="lname" name="lname" required> <br> <br>
                    
                    <label for="email">Your Mail:</label>
                    <input type="text" id="email" name="email" required> <br><br>
                    
                    <label for="Phone">Phone No:</label>
                    <input type="text" id="Phone" name="mobno" required> <br> <br>
                    
                    <textarea name="message" id="Message" cols="30" rows="5" placeholder="Type Your Message Here"></textarea> <br><br>

                    <input type="submit" value="Send Message" name="send" class ="msg"><br><br><br><br>

                </form> 
            </div>
            
    </div>
    </div>

</div>
</div> <br><br>

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