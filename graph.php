
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>

<h1><center>IT Project Management System</center></h1>

<nav>
     <a href="home.php">Home</a>
     <a href="table.php">Tables</a>
     <a href="graph.php">Graph</a>
     <a href="view.php">View</a>
   </nav>

	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 	<script type="text/javascript">
 		google.charts.load('current', {'packages':['corechart']});
 		google.charts.setOnLoadCallback(drawChart);

 		function drawChart() {

 			var data = google.visualization.arrayToDataTable([
 				['Task', 'Hours per Day'],
 				['Library Management System',     11],
 				['Sales and invoice tracking system',      2],
 				['Employee Profile Management Sytem',  2],
 				['Exams Results Page', 2],
 				['Other Project',    7]
 			]);

 			var options = {
 				title: 'It Projects used of budget'
 			};

 			var chart = new google.visualization.PieChart(document.getElementById('piechart'));

 			chart.draw(data, options);
 		}
 	</script>
 </head>
 <body>
 	<div id="piechart" style="width: 900px; height: 500px;"></div>


</body>
</html>
