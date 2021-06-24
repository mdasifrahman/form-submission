<?p
   
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
        if(empty($_POST['username']))
        {
        	$username_error ="please enter the username";
        }

   if(empty($_post['password']))
   {
   	$password_error ="please enter the password";
   }

   }

   extract($_REQUEST);
   $file=fopen("fileio.txt","a");

    fwrite($file,"username");
    fwrite($file, $username ."\n");

    fwrite($file,"password");
    fwrite($file, $password."\n");

    fclose($file); 


?>





<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>

	<h1> login form </h1>
	<form method="post" action=""auto_complete="off">
		<label for="usernmae">Username</label>
		<input type="text" name="username" id= "username"><br><br>
		<span><?php if(isset($username_error))echo $username_error; ?></span>
			<label for="password">Password:</label>
		<input type="password" name="password" id= "password">
		<span><?php if(isset($password_error))echo $password_error; ?></span>
		<br><br>

		<input type="submit" name="submit" value ="login">
		

	</form>
<br>

<a href="formsubmission.php">Click to Registration</a>

</body>
</html>