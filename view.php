<?php require "header.php" ?>
<div id="main4">
	<?php
		require_once "config.php";
		$query = "SELECT * FROM blog where id = ".$_GET['id'];
		$result = $connection->query($query);
		if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        echo "<h2> Title : </h2>".$row["title"] ."<br>". "<h2> Content of the post : </h2>" . $row["content"]. "<br>";
					$id=$row['id'];
	    }
		}
	?>
</div>
<div id="main5">
<?php

?>
		<h3>To edit this post </h3>
		<?php
			if(isset($checkvar))
			{
				echo '<li><a href="edit.php?id=' . $id . '">' . "Click Here" . '</a></li>';
			}
			else
			{
				{echo '<a href="login.php">' . "Login" . '</a>';}
			}
		?>
	</div>
<?php require "footer.php" ?>
