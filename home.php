<?php

session_start();


?>
<!DOCTYPE html>
<html>
  <head>
<meta charset="UTF-8">
<title>home</title>
<link rel="style" type="text/css" href="stylesheet.css">
</head>

<body>
 
<h2> welcome <?php echo $_SESSION['username']; ?> </h2>
<a href = "logout.php">LOGOUT</a>

</body>

</html>
