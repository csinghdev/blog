<?php
	include "config.php";

	$query = "SELECT * FROM `blog`";
	$result = $connection->query($query);
	$indexOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>codekamp</title>
</head>
<body>
<h1>List of all blogs</h1>
<ul>
   <?php
		foreach($indexOfBlogs as $blog)
		{
			echo '<li><a href="view.php?id=' . $blog['id'] . '">' . $blog['title'] . '</a></li>';
		}
	?>
</ul>
<h2>To add a new post </h2>
<a href="create.php">Click Here</a>
</body>
</html>
