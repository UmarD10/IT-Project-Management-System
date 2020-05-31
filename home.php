<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<h1><center>IT Project Management System</center></h1>
<nav>
     <a href="home.php">Home</a>
     <a href="table.php">Tables</a>
     <a href="graph.php">Graph</a>
     <a href="view.php">View</a>
   </nav>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>


</body>
</html>