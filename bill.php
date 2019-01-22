<html>
<head>
<meta charset="utf-8">
<title>Bill</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
   
    <center>
    <div id="container" class="shadow">

<?php
  $conn = mysqli_connect('localhost','root');  
        
if($conn)
{  
   echo "<h1>Your Order</h1>";
   //echo "<br>";
   echo "<table border = '1' cellpadding='15' cellspacing='0'>";
   echo "<tr><td><b>Item</b></td><td><b>Rate</b></td><td><b>Quantity</b></td><td><b>Price</b></td></tr>";

}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}

mysqli_select_db($conn,'moversandpackers');

$query = "SELECT * 
FROM quantity
WHERE order_id=(
    SELECT max(order_id) FROM quantity
    )";
$res = mysqli_query($conn,$query);

$row=mysqli_fetch_array($res);

$sofaq = "SELECT price 
FROM move
WHERE movetype_name like 'sofa%' ";
$sofap =  mysqli_query($conn,$sofaq);
$row1=mysqli_fetch_array($sofap);

$bedq = "SELECT price 
FROM move
WHERE movetype_name like 'bed%' ";
$bedp =  mysqli_query($conn,$bedq);
$row2=mysqli_fetch_array($bedp);

$cupboardq = "SELECT price 
FROM move
WHERE movetype_name like 'cupboard%' ";
$cupboardp =  mysqli_query($conn,$cupboardq);
$row3=mysqli_fetch_array($cupboardp);

$tvq = "SELECT price 
FROM move
WHERE movetype_name like 'tv%' ";
$tvp =  mysqli_query($conn,$tvq);
$row4=mysqli_fetch_array($tvp);

$refrigeratorq = "SELECT price 
FROM move
WHERE movetype_name like 'refrigerator%' ";
$refrigeratorp =  mysqli_query($conn,$refrigeratorq);
$row5=mysqli_fetch_array($refrigeratorp);

$twowheelerq = "SELECT price 
FROM move
WHERE movetype_name like '%two_wheeler' ";
$twowheelerp =  mysqli_query($conn,$twowheelerq);
$row6=mysqli_fetch_array($twowheelerp);

$fourwheelerq = "SELECT price 
FROM move
WHERE movetype_name like 'four_wheeler%' ";
$fourwheelerp =  mysqli_query($conn,$fourwheelerq);
$row7=mysqli_fetch_array($fourwheelerp);

$tableq = "SELECT price 
FROM move
WHERE movetype_name like 'table%' ";
$tablep =  mysqli_query($conn,$tableq);
$row8=mysqli_fetch_array($tablep);

$chairq = "SELECT price 
FROM move
WHERE movetype_name like 'chair%' ";
$chairp =  mysqli_query($conn,$chairq);
$row9=mysqli_fetch_array($chairp);


if("$row[1]" != 0){
    $sofaprice = $row1[0]*$row[1];
   echo "<tr><td>Sofa</td><td>{$row1[0]}</td><td>{$row[1]}</td><td>{$sofaprice}</td></tr>";
   echo "<br>";
}

if("$row[2]" != 0){
    $bedprice = $row2[0]*$row[2];
   echo "<tr><td>Bed</td><td>{$row2[0]}</td><td>{$row[2]}</td><td>{$bedprice}</td></tr>";
   echo "<br>";
}

if("$row[3]" != 0){
    $cupboardprice = $row3[0]*$row[3];
   echo "<tr><td>Cupboard</td><td>{$row3[0]}</td><td>{$row[3]}</td><td>{$cupboardprice}</td></tr>";
   echo "<br>";
}

if("$row[4]" != 0){
    $tvprice = $row4[0]*$row[4];
   echo "<tr><td>T.V.</td><td>{$row4[0]}</td><td>{$row[4]}</td><td>{$tvprice}</td></tr>";
   echo "<br>";
}

if("$row[5]" != 0){
    $refrigeratorprice = $row5[0]*$row[5];
   echo "<tr><td>Refrigerator</td><td>{$row5[0]}</td><td>{$row[5]}</td><td>{$refrigeratorprice}</td></tr>";
   echo "<br>";
}

if("$row[6]" != 0){
    $twowheelerprice = $row6[0]*$row[6];
   echo "<tr><td>Two-wheeler</td><td>{$row6[0]}</td><td>{$row[6]}</td><td>{$twowheelerprice}</td></tr>";
   echo "<br>";
}

if("$row[7]" != 0){
    $fourwheelerprice = $row7[0]*$row[7];
   echo "<tr><td>Four-wheeler</td><td>{$row7[0]}</td><td>{$row[7]}</td><td>{$fourwheelerprice}</td></tr>";
   echo "<br>";
}

if("$row[8]" != 0){
    $tableprice = $row8[0]*$row[8];
   echo "<tr><td>Table</td><td>{$row8[0]}</td><td>{$row[8]}</td><td>{$tableprice}</td></tr>";
   echo "<br>";
}

if("$row[9]" != 0){
    $chairprice = $row9[0]*$row[9];
   echo "<tr><td>Chair</td><td>{$row9[0]}</td><td>{$row[9]}</td><td>{$chairprice}</td></tr>";
   echo "<br>";
}
  
   $total = $row1[0]*$row[1] + $row2[0]*$row[2] + $row3[0]*$row[3] + $row4[0]*$row[4] + $row5[0]*$row[5] + $row6[0]*$row[6] + $row7[0]*$row[7] + $row8[0]*$row[8] + $row9[0]*$row[9];
   echo "<tr><td colspan = 3><b>Total</b></td><td>{$total}</td> ";
        echo"</table>";
        
        echo"<br>";
        echo"<br>";
   
   echo"<form name = 'billconfirm' action='website.php' method='get'>";
   echo"<input type='submit' value='Confirm'>";
   echo "</form>";
?>

     
        
    </center>
</body>
    </html>