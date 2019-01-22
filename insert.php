<?php
  $conn = mysqli_connect
('localhost','root');  

if($conn)
{
     echo"<h1>Add Item</h1>";
}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}
mysqli_select_db($conn,'moversandpackers');
 $item=$_POST['item'];
 $price=$_POST['price'];

$sql = "insert into move(movetype_name)values('$item')";
$result = mysqli_query($conn,$sql);
$sql1 = "update move set price='$price' where movetype_name='$item'";
$result1 = mysqli_query($conn,$sql1);

$q2 = "alter table quantity add $item int default 0";
$res2 = mysqli_query($conn,$q2);
?>

<html>
<body>
<form method="POST">
  
  <input type="text" placeholder="Item name" name="item" required class="accountinfo" required>
   <input type="text" placeholder="Price" name="price" required class="accountinfo" required>
   <br>
  <br>
  
<input type="submit" value="Confirm">
</form>
<br>
<center><a href = "admin.php">HOME</a></center>
    </body>
        </html>