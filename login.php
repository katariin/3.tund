<?php

//echo $_POST["email"];

//Defineerime muutujad
$email_error = "";
$password_error = "";

//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"] == "POST"){
   //echo "jah";
   
   //kas e-post on tühi
   if( empty($_POST["email"]) ) {
	   
	   //jah oli tühi
	   $email_error = "See Väli on kohustuslik";
	   
   }
}

?>
<?php
   $page_title = "Login leht";
   $file_name = "login.php";
   ?>

<html>
<head>
<title>Login page</title>
</head>

<body>
<h2>Login</h2>
<form action="login.php" method="post">
<input type="email" placeholder="E-post"><br><br>
<input type="password" placeholder="Parool"><br><br>
<input type="submit" value="Logi sisse"><br><br>

<h2>Create User</h2>

</body>