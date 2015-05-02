<?php
	include "config.php";

	$query = "SELECT * FROM `blog`";
	$result = $connection->query($query);
	$indexOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
?>
<?php require "header.php" ?>
	<div id="main1">
		<h1>List of all blogs</h1>
		<ul>
   <?php
		foreach($indexOfBlogs as $blog)
		{
			echo '<li><a href="view.php?id=' . $blog['id'] . '">' . $blog['title'] . '</a></li>';
		}
	?>
	</ul>
	</div>
	<div id="main2">
		<h1>To add a new post </h1>
		<?php
		if(isset($checkvar))
		{
			echo '<a href="create.php">' . "Create a new post" . '</a>';
		}
		else
		{
			echo "Befor posting or editing a post you need to ";
			echo '<a href="login.php">' . "Login" . '</a>';
		}
		?>
</div>
<div id="main3">
	<h1>Create an Account</h1>
	<p>To start writing blogs for this site , you need to create an account.</p>
	<br>
	<p>Click on Sign Up to create an account</p>
	<br>
	<a href="signup.php">Sign Up</a>
</div>
<?php require "footer.php" ?>
