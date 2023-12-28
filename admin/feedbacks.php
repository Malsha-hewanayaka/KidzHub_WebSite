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
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

  <?php 
          include "../server/db.php";
          $query = "SELECT * FROM feedbacks";
          $result = mysqli_query($connection, $query);
          if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $email = $row['email'];
                    $mobno = $row['mobno'];
                    $message = $row['message'];
                    $created_at = $row['created_at'];

                    echo "<tr>";
                    echo "<td>". $id ."</td>";
                    echo "<td>". $fname ."</td>";
                    echo "<td>". $lname ."</td>";
                    echo "<td>". $email ."</td>";
                    echo "<td>". $mobno ."</td>";
                    echo "<td>". $message ."</td>";
                    echo "<td>". $created_at ."</td>";
                    echo "</tr>";
                }
            } else {
              echo "<tr>";
              echo "<td class='text-center' colspan=5>No Users</td>";
              echo "</tr>";
            }
            
          }
        ?>
  </tbody>
</table>

            
</div>
</div>
</div>



    
</body>
</html>