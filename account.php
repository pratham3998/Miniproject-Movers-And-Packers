<!doctype html>
<html>
<head>
    <title>Create an account</title>
<meta charset="utf-8">
<title>Create an account</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>

<script type="text/javascript">

function f1()
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
    
 var x = document.getElementById("password1").value;
 var y = document.getElementById("password2").value;
if(x == y)
return true;
else
{
alert("The password does not match");
return false;
}
}
    ``
</script>
<style>

input[type=email]{
	width: 99%;
	padding: 10px 10px;
	border: 1px solid gray;
	display: inline-block;
	box-sizing: border-box;
}

</style>

<form action="registration.php" method="POST" onclick="return f1()">
<div id="container" class="shadow">
	<font size="+3"><b>Signup Form</b></font>
	<br>
	<br>
	<input type="text" placeholder="Enter your name"  name="name" required class="accountmail" id="name">
	<br>
	<br>
	<input type="email" placeholder="Enter your email address" name="username" required class ="accountemail" id="email">
	<br>
	<br>
	<input type="password" placeholder="Enter new password" name="password" required class="accountpass" id = "password1">
	<input type="password" placeholder="Reenter new password" name="confirmpassword" required class="accountpass" id = "password2">
	<br>
	<br>
	By signing up you accept our <a href="terms.html">terms&conditions</a> 
	<br>
	<br>
	<input type="submit" value="Create my account" class="createaccount">	
</div>
</form>
</body>
</html>
