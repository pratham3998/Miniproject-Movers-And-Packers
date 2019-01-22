
<!DOCTYPE html>
<html>
<head>
<link href="stylesheet.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
  <script type="text/javascript">
      function f2()
  {
            var a = /^[A-Z a-z]+$/;
            var x=document.getElementById("r_name").value;
            if(x==="")
        {
                alert("You did not enter your name");
                return false;
        } 
             
            if(x.length>25)
        {
                alert("Name must contain less than 25 Character");
                return false;
         }   
            if(x.match(a))
            true;
            else
        {
                alert("Name must contain only Alphabet");
                return false;
        } 
      
      var m = document.getElementById("c_no").value;
            var n = /^[0-9]+$/;
            if(m=="")
       {
              alert("You did not enter the Mobile Number");
                return false;                            
        }    
            if(m.length!=10)
        {
                alert("Enter the Valid Mobile Number");
                return false;
        }

            if(isNaN(m))
        {
                alert("Mobile Number must contain only numeric value");
                return false; 
        }
            else
                return true;
        if(isNaN(m))
            {
                alert("Mobile Number must contain only numeric value");
                return false; 
            }
            else
                return true;

           var b = /^[A-Za-z]+$/;
            var y =document.getElementById("from").value;
            if(y==="")
        {
                alert("Enter location");
                return false;
        } 
            if(y.match(b))
            true;
            else
        {
                alert("Invalid input");
                return false;
        } 

             var c = /^[A-Za-z]+$/;
            var z =document.getElementById("to").value;
            if(z==="")
        {
                alert("Enter location");
                return false;
        } 
            if(z.match(c))
            true;
            else
        {
                alert("Invalid input");
                return false;
        } 
            if(y.localeCompare(z)==0)
                 {
                alert("Invalid input");
        }
         else
                true;
  }

</script>


<style>

input[type=email]{
	width: 49%;
	padding: 10px 10px;
	border: 1px solid gray;
	display: inline-block;
	box-sizing: border-box;
}

input[type=date]{
	width: 49%;
	padding: 10px 10px;
	border: 1px solid gray;
	display: inline-block;
	box-sizing: border-box;
}

</style>

<div id="container" class="shadow"> 
<font size="+3"><b><center>Request For Quote</center></b></font>
<br>
<center>
<form action ="shippingdetails.php" method="POST" onsubmit="return f2()">
  
  <input type="text" placeholder="Receiver's Name" name="receivername" required class="accountinfo" id="r_name">
   <br>
  <br>
  <input type="text" placeholder="Contact no." name="contactno" required class="accountinfo" id="c_no">
  <br>
  <br>
  Moving from: 
  <select name="movingfrom">
  <option value="Pune">Pune</option>
  <option value="Chennai">Chennai</option>
  <option value="Bangalore">Bangalore</option>
  <option value="Delhi">Delhi</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Ahmedabad">Ahmedabad</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Jaipur">Jaipur</option>
</select>
  Moving to:
  <select name="movingto">
  <option value="Pune">Pune</option>
  <option value="Chennai">Chennai</option>
  <option value="Bangalore">Bangalore</option>
  <option value="Delhi">Delhi</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Ahmedabad">Ahmedabad</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Jaipur">Jaipur</option>
</select>
  <br>
  
  <br>
  <input type="date" placeholder="Moving Date" name="movingdate" required id>
  <br>
  <br>
  <left>Good time to call :</left>
  <input type="time" required class="forminfo" name="goodtimetocall">
  <br>
  <br>
  <b>What would you like to deliver:</b>
  <br>
  <br>
    
    
    
<?php
  $conn = mysqli_connect('localhost','root');  
        
if($conn)
{  
  
}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}

mysqli_select_db($conn,'moversandpackers');


$query = "SELECT * 
FROM move
WHERE movetype_id=(
    SELECT min(movetype_id) FROM move
    )";
$res = mysqli_query($conn,$query);
//$row1=mysqli_fetch_array($res);

$query1 = "SELECT * 
FROM move
WHERE movetype_id=(
    SELECT max(movetype_id) FROM move
    )";
$res1 = mysqli_query($conn,$query1);
//$row2=mysqli_fetch_array($res1);

$que = "SELECT * FROM move"; 
$result=mysqli_query($conn,$que);

echo"<form>";
while($print=mysqli_fetch_assoc($result))
{	
	$name=$print['movetype_name'];
	echo $name;
	echo " &nbsp ";
	echo "<input type = 'number' min = '0' max = '10'>";
	echo " &nbsp ";
}
echo"</form>";

//echo $row1[0];

//echo $row2[0];
/*
$q1 = "select * from move where movetype_id=(select max(movetype_id) from move where movetype_id < row1[1])";
$q2 = mysqli_query($conn,$q1);
echo $q2[movetype_name];
$row3 = mysqli_fetch_array($q2);
echo $row3[0];
*/

?>
    <!--
  Sofa  <input type="number" min="0" max="10" name="sofa" > Bed     <input type="number" min="0" max="10" name="bed" > Cupboard  <input type="number" min="0" max="10" name="cupboard" > T.V  <input type="number" min="0" max="10" name="tv" > Refrigerator  <input type="number" min="0" max="10" name="refrigerator" >
<br>
<br>
Two-Wheeler  <input type="number" min="0" max="10" name="twowheeler" > Four-Wheeler  <input type="number" min="0" max="10" name="fourwheeler" > Table  <input type="number" min="0" max="10" name="table" > Chair  <input type="number" min="0" max="10" name="chair" >
-->

    <br>
<br> 
  <input type="text" placeholder="Any Specific Message" name="anyspecificmessage" >
<br>
<br>
<input type="submit" value="Confirm">
</form>
    </body>
        </html>