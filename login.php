<?php

//echo $_POST["email"];

//Defineerime muutujad
$nickname_error = "";
$email_error = "";
$password_error = "";

//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"] == "POST"){
//echo "jah";

//kas nickname on tühi
$nickname_error = "See väli on kohustuslik";
//kas e-post on tühi
$email_error = "See väli on kohustuslik";
//kas parool on tühi
$password_error = "See väli on kohustuslik";

}
//kas parool on tühi

?>
<?php
	$page_title = "Login leht";
	$file_name = "login.php";
	?>
<?php require_once("header.php"); ?>

<body>
<h2>Login</h2>
<p><big>
<form action="login.php" method="post"></big></p>
<p><input type="nickname" placeholder="Name" style="width:60%"> <?php echo $email_error; ?><br><br></p>
<p><input type="email" placeholder="E-post" style="width:60%"> <?php echo $email_error; ?><br><br></p>
<p><input type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br></p>
<p><input type="submit" value="Logi sisse"><br><br></p>


<h2>Create User</h2>
<p><form action="login.php" method="post"></p>
<input type="login" placeholder="Kasutajanimi"></p>
<input type="nickname" placeholder="Name"><?php echo $nickname_error; ?><br><br>
<input type="email" placeholder="E-post"><?php echo $email_error; ?><br><br>
<input type="password" placeholder="Parool"><?php echo $password_error; ?><br><br>
<input type="submit" value="Create"><br><br></p>

</body>
</html> 