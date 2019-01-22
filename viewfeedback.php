<!DOCTYPE html>
<html>
<head>
  <title>View</title>
    <link href="stylesheet.css" rel="stylesheet" media="screen" type="text/css">
<body>
    <div id="container" class="shadow">
   <?php
  $conn = mysqli_connect
('localhost','root');  

if($conn)
{
     
}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}

mysqli_select_db($conn,'moversandpackers');

$sql2= "select * from feedback";
$result2= mysqli_query($conn,$sql2);

echo "<center><h1><b>Feedback:</b></h1>";
    echo "<table border ='1' cellpadding ='15'>";
	while($row = mysqli_fetch_array($result2))
	{	
		
		echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td> <td>{$row[2]}</td><td>{$row[3]}</td></tr>";
	}
     echo"</table>";
    echo"</center>";
    
  ?>
</body>
</html>          