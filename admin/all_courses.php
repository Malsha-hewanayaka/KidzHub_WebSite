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
    <title>All Courses</title>
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
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Class Duration</th>
      <th scope="col">Target Student Age</th>
      <th scope="col">Subject</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
        <?php 
          include "../server/db.php";
          $query = "SELECT * FROM courses";
          $result = mysqli_query($connection, $query);
          if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $class_duration = $row['class_duration'];
                    $target_student_age = $row['target_student_age'];
                    $consumption = $row['consumption'];
                    $subject = $row['subject'];
                    $grade = $row['grade'];

                    echo "<tr>";
                    echo "<td>". $id ."</td>";
                    echo "<td><a href='../course.php?course_id=". $id ."'>". $title ."</a></td>";
                    echo "<td>". $description ."</td>";
                    echo "<td>". $class_duration ."</td>";
                    echo "<td>". $target_student_age ."</td>";
                    echo "<td>". $subject ."</td>";
                    echo "<td>". $grade ."</td>";
                    echo "</tr>";
                }
            } else {
              echo "<tr>";
                echo "<td class='text-center' colspan=9>No Courses</td>";
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
