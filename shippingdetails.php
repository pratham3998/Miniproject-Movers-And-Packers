<?php
session_start();
$conn = mysqli_connect
('localhost','root');  

if($conn)
{
     echo"<h1>connected to db</h1>";
}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}

mysqli_select_db($conn, 'moversandpackers');

$receivername = $_POST['receivername'];
$contact = $_POST['contactno'];
$movingfrom = $_POST['movingfrom'];
$movingto = $_POST['movingto'];
$movingdate = $_POST['movingdate'];
$email = $_POST['email'];
$callingtime = $_POST['goodtimetocall'];
$message = $_POST['anyspecificmessage'];

$qy = " insert into shipping_details1(customer_name, move_from, move_to, contact, moving_date, calling_time , message) values('$receivername', '$movingfrom', '$movingto', '$contact', '$movingdate', '$callingtime', '$message')";

mysqli_query($conn, $qy);

$q1 = 

$sofa = $_POST['sofa'];
$bed = $_POST['bed'];
$cupboard = $_POST['cupboard'];
$tv = $_POST['tv'];
$refrigerator = $_POST['refrigerator'];
$twowheeler = $_POST['twowheeler'];
$fourwheeler = $_POST['fourwheeler'];
$table = $_POST['table'];
$chair = $_POST['chair'];

$qs = " insert into quantity(sofa, bed, cupboard, tv, refrigerator, twowheeler, fourwheeler , table1, chair) values('$sofa', '$bed', '$cupboard', '$tv', '$refrigerator', '$twowheeler', '$fourwheeler', '$table', '$chair')";

mysqli_query($conn, $qs);

 
header("Location: bill.php");

?>