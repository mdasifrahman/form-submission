<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  if(empty($_POST['fname']))
  { 
   $fname_error = "please enter the first name";
  }
  if(empty($_POST['lname']))
  {
    $lname_error = " please enter the last name"

  }
   if(empty($_POST['radio']))
  {
    $lname_error = " please enter the gander"

  }

 if(empty($_POST['birthday']))
  {
    $lname_error = " please enter the DOB"

  }
   if(empty($_POST['Religion']))
  {
    $lname_error = " please enter the Religion"

  }
 if(empty($_POST['adress']))
  {
    $lname_error = " please enter the Adress"

  }
   if(empty($_POST['phone']))
  {
    $lname_error = " please enter the phone"

  }
 if(empty($_POST['email']))
  {
    $lname_error = " please enter the email"

  }

}


<!DOCTYPE html>
<html>
<head>

	<title>Registration form</title>

</head>
<body> <form method= "post" action="" auto_complete ="off">
	
<p><b>Basic information:</b></p> <br>
		<p><b><u>Please complete the form .</u></b></p> <br><br>
	<label for= "fname">Frist Name:</label>
	<input type="text"id="fname" name="fname">
    <span><?php if(isset($fname_error)) echo $fname_error; ?></span>


	<br><br>
	<label for= "lname">last Name:</label>
	<input type="text"id="lname" name="lname">
	<span><?php if(isset($lname_error))echo $lname_error; ?></span>
	<br><br>
	<p> Gander </p> 
	<input type="radio" id="male"name="gander"value="male">
	<span><?php if(isset($radio_error))echo $radio_error; ?></span>
	<labelfor="male">male</label><br>
	<input type="radio" id="female"name="gander"value="female">
	<labelfor="female">female</label><br><br>
		<label for="birthday">Date of Birth:</label>
<input type="date" id="birthday" name="birthday"><br><br>
<span><?php if(isset($birthday_error))echo $birthday_error; ?></span>
<label for="Religion">Religion</label>
<input type="text" id="Religion" name="Religion"><br><br><br>
<span><?php if(isset($Religion_error))echo $Religion_error; ?></span>

<p><b>Contact information:</b></p>
<br><br>
<label for="adress">Present Adress:</label><br>
<textarea id="adress"name="adress"></textarea><br>
<span><?php if(isset($adress_error))echo $adress_error; ?></span>
<label for="adress">Permanent Adress:</label><br>
<textarea id="adress"name="adress"></textarea><br>
<span><?php if(isset($adress_error))echo $adress_error; ?></span>
<label for="phone">phone number:</label><br>
<input type="tel" id="phone" name="phone">
<span><?php if(isset($phone_error))echo $phone_error; ?></span>
<br><br>
<label for="email">Enter your email:</label><br>
<input type="email" id="email" name="email"><br>
<span><?php if(isset($email_error))echo $email_error; ?></span>
<br>
<a href="http://github.com"target="_blank" >personal website</a><br><br>
<br>

	<input type="submit" name="submit" value="Submit">	


</form>
<br><br>
<a href="formsubmission_login.php">Go to login</a>
</body>
</html>