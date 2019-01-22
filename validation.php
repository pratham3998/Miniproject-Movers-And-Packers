<?php
  $conn = mysqli_connect
('localhost','root');  

if($conn)
{
     echo"<h1></h1>";
}
else
{
    die("Connection failed: ".mysqli_connect_error()); 
}


mysqli_select_db($conn,'moversandpackers');

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
	  
      $sql1 = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
      $result1 = mysqli_query($conn,$sql1);
      $count1 = mysqli_num_rows($result1);
      

      $sql2 = "SELECT * FROM system_admin WHERE username = '$username' and password='$password'";
      $result2 = mysqli_query($conn,$sql2);
      $count2 = mysqli_num_rows($result2);    
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count1 == 1) 
      {
         
         header("location: website.php");
      }
	  if($count2 == 1) 
	  {
			header("location: admin.php");
	  }
		else
	  {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
