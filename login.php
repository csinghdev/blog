<?php
if (count($_POST))
{
  	$email = $_POST['email'];
  	$password = md5($_POST['password']);
  	require_once "config.php";

  	$query = "SELECT * FROM `user`";
  	$result = $connection->query($query);
	$indexOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
	$temp=0;
  	foreach($indexOfBlogs as $blog)
	{
		if($blog['email']===$email && $blog['password']===$password)
		{
			echo "Login Successfull";
			$username=$blog['username'];
			$cookie = generateString();
			setcookie ('blog-cookie', $cookie);
			$result = "INSERT INTO session (sid,userid) VALUES ('$cookie','$username')";
  			if ($connection->query($result) === TRUE)
  			{
    			$newId = $connection->insert_id;
  			} 
  			else
  			{
    			echo "Error: " . $result . "<br>" . $connection->error;
  			}
			$temp=1;
			header("Location: index.php");
			break;
		}
	}
	if($temp!==1)
	{
		echo "Enter Correct email id or password";
	}
 }
?>
<?php require "header.php" ?>
<h1>Sign in</h1>
<form method="POST">
<label for="email" >Enter Email : </label>
  	<input id="email" type="email" name="email" placeholder="Enter email here"/>
  	<br><br>
    <label for="password" >Enter Password : </label>
    	<input id="password" type="password" name="password" placeholder="Enter password here"/>
    	<input type="submit" style="..." value="Login" >
</form>
<?php require "footer.php" ?>

<?php
function generateString($length=20) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}
?>
