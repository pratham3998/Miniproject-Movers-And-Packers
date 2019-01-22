<?php
  $conn = mysqli_connect
('localhost','root');  

if($conn)
{
     echo"<h1>Update price</h1>";
}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}

mysqli_select_db($conn,'moversandpackers');

 $item = $_POST['item'];
 $price = $_POST['price'];
 

$sql = "update move set price='$price' where movetype_name='$item'";
$result = mysqli_query($conn,$sql);

?>

<html>
<body>

</body>
</html>
<html>
<body>
<form method="POST">
 
  <input type="text" placeholder="Item name" name="item" required class="accountinfo">
   <br>
  <br>
    <input type="text" placeholder="price" name="price" required class="accountinfo">
   <br>
  <br>
 

<input type="submit" value="Confirm">
</form><br>
	<center><a href = "admin.php">HOME</a></center>
    </body> 
        </html>
