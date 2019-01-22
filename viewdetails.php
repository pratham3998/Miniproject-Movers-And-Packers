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

$sql = "select * from shipping_details1";
$result= mysqli_query($conn,$sql);
$sql1 = "select * from quantity";
$result1= mysqli_query($conn,$sql1);

echo "<center><h1><b>View Data:</b></h1>";
    echo "<table border ='1' cellpadding ='15'>";
while($row = mysqli_fetch_array($result))
	{	
		echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td> <td>{$row[2]}</td><td>{$row[3]}</td></tr><tr><td>{$row[4]}</td><td>{$row[5]}</td> <td>{$row[6]}</td><td>{$row[7]}</td></tr>";
	}
  
  while($row = mysqli_fetch_array($result1))
  { 
    echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td> <td>{$row[2]}</td><td>{$row[3]}</td></tr><tr><td>{$row[4]}</td><td>{$row[5]}</td> <td>{$row[6]}</td><td>{$row[7]}</td></tr>
    <tr><td>{$row[8]}</td><td>{$row[9]}</td> <td>{$row[10]}</td><td>{$row[11]}";
  }
    echo"</table>";
    echo"</center>";
  ?>
</body>
</html>          