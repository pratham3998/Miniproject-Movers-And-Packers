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

$sql1= "select * from move";
$result1= mysqli_query($conn,$sql1);

echo "<center><h1><b>View Price:</b></h1>";
    echo "<table border ='1' cellpadding ='15'>";
	while($row = mysqli_fetch_array($result1))
	{	
		
		echo "<tr><td>{$row[1]}</td><td>{$row[2]}</td> </tr>";
	}
     echo"</table>";
    echo"</center>";
    
  ?>
</body>
</html>          