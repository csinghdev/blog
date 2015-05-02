<?php
if (count($_POST))
{
	$name = $_POST['name'];
  	$username = $_POST['username'];
  	$email = $_POST['email'];
  	$password = md5($_POST['password']);
  	require_once "config.php";

  	$result = "INSERT INTO user (name,username,email,password) VALUES ('$name','$username','$email','$password')";
  
  	if ($connection->query($result) === TRUE)
  	{
    	$newId = $connection->insert_id;
    	echo "New User created successfully";
  	} else
  	{
    	echo "Error: " . $result . "<br>" . $connection->error;
  	}
 }
?>
<?php require "header.php" ?>
<h1>Sign Up</h1>
<form action="signup.php" method="POST">
<label for="name" >Enter Name : </label>
	<input id="name" type="text" name="name" placeholder="Enter name here"/>
	<br><br>
<label for="username" >Enter User Id : </label>
	<input id="name" type="text" name="username" placeholder="Enter user user name"/>
	<br><br>
  <label for="email" >Enter Email : </label>
  	<input id="email" type="email" name="email" placeholder="Enter email here"/>
  	<br><br>
    <label for="password" >Enter Password : </label>
    	<input id="password" type="password" name="password" placeholder="Enter password here"/>
    <input type="submit" style="..." value="Create" >
</form>
<?php require "footer.php" ?>
