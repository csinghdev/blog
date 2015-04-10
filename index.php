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
		<h2>To add a new post </h2>
		<a href="create.php">Click Here</a>
</div>
<div id="main3">
	<p>For editing selct the blog then click on edit in the view page and then edit the blog.</p>
</div>
<?php require "footer.php" ?>
