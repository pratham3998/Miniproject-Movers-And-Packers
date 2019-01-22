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
   $name = $_POST['name'];
   $contact = $_POST['contactno'];
   $message = $_POST['message'];
   $sql1 = "insert into feedback (name,contact,message) values ('$name','$contact','$message')";
$result = mysqli_query($conn,$sql1);

?>

<html>
<head><title>Feedback Form</title>
<link href="stylesheet.css" rel="stylesheet" media="screen" type="text/css">
<style>
a:link, a:visited {
    background-color: #000000;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: black ;
}
</style>
<a href="website.php"><b>Home</b></a>
</head>
 <body>
    <script type="text/javascript">
      function f3()
  {
            var a = /^[A-Z a-z]+$/;
            var x=document.getElementById("name").value;
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
      
      var m = document.getElementById("contact").value;
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
       
  }
    </script>
<center>
<div id="container" class="shadow">  
<img src="feedback-icon.jpg"  width="250" height="200">

  <form method="POST" onsubmit="return f3()">
  <input type="text" placeholder="Name" name="name" id="name" required class="forminfo">
    <br>
    <br>
  <input type="text" placeholder="Contact no" name="contactno" id="contact" required class="forminfo"><br>
  

<br>
<br>
Tell us about your experience with us!
<br>
<textarea rows="4" cols="65" placeholder="Your Message" name="message" required class="forminfo"></textarea>
<br>
<br>                                    
<input type="submit" value = "Submit">
    </form>
  </div></center></body></html>                                   
