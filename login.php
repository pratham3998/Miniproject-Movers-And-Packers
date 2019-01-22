<!doctype html>
<html>
<head>
<title> login</title>
<link href="stylesheet.css" rel="stylesheet" media="screen" type="text/css">
</head>

<body>

	<div id="container" class="shadow">  
    <center>
    <img src="login.png" alt="login logo" width="100" height="100">
	</center>
    <br>
    <div class="boxes">
    <form action="validation.php" method="POST">
    <label><b>Email</b></label>
    <br>

      <input type="text" placeholder="email" name="username" required class="forminfo" >  
      <br>
      <br>
	  <label><b>Password</b></label>
	  <br>
	  <input type="password" placeholder="enter password" name="password" required class="forminfo">
	  <br>
      <br>
	  <button type="submit">Login</button>
      </div>
</form>	 
      
      <div class="boxes" style="background-color:lightgray">
      <input type="reset" value="Cancel" class="canclebutton">
	  </div>
	  <br>
	  <div class="boxes">
		  <font size="+2"><b><a href="account.php" class="account">Create an account</a></b></font>
	  </div>
 	  
</body>
</html>
