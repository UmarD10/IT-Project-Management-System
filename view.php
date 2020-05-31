
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <h1><center>IT Project Management System</center></h1>

  <nav>
     <a href="home.php">Home</a>
     <a href="table.php">Tables</a>
     <a href="graph.php">Graph</a>
     <a href="view.php">View</a>
   </nav>

   <table align="center" border="1px" style="width:600px; line-height:40px;">
       <tr>
           <th colspan="4"><h2>IT Projects</h2></th>
       </tr>
       <t>
           <th> ProjectID </th>
           <th> ProjectName </th>
           <th> Description </th>
           <th> Requirements</th>
       </t>

   <?php
       while($rows=mysql_fetch_assoc($result))
       {
   ?>
           <tr>
               <td><?php echo $rows['ProjectID']; ?></td>
               <td><?php echo $rows['ProjectName']; ?></td>
               <td><?php echo $rows['Description']; ?></td>
               <td><?php echo $rows['Requirements']; ?></td>
           </tr>
   <?php
       }
   ?>
   </table>

   <table align="center" border="1px" style="width:600px; line-height:40px;">
       <tr>
           <th colspan="4"><h2>IT Projects</h2></th>
       </tr>
       <t>
           <th> ProjectID </th>
           <th> ProjectName </th>
           <th> Description </th>
           <th> Requirements</th>
       </t>

   <?php
       while($rows=mysql_fetch_assoc($result))
       {
   ?>
           <tr>
               <td><?php echo $rows['ProjectID']; ?></td>
               <td><?php echo $rows['ProjectName']; ?></td>
               <td><?php echo $rows['Description']; ?></td>
               <td><?php echo $rows['Requirements']; ?></td>
           </tr>
   <?php
       }
   ?>
   </table>

  </body>
</html>
