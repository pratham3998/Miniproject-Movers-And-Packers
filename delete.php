<?php
  $conn = mysqli_connect
('localhost','root');  

if($conn)
{
     echo"<h1>Delete Item</h1>";
}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}

mysqli_select_db($conn,'moversandpackers');
 $item=$_POST['item'];
 

$sql = "call deleteitem('$item')";
$result = mysqli_query($conn,$sql);
$q2 = "alter table quantity drop $item";
$res2 = mysqli_query($conn,$q2);

?>


<html>
<body>
<form method="POST">
  
  <input type="text" placeholder="Item name" name="item" required class="accountinfo">
   <br>
  <br>
  

<input type="submit" value="Confirm">
</form><br>
  <center><a href = "admin.php">HOME</a></center>
    </body>
        </html>