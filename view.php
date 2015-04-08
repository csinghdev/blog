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
<?php
/*
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>codekamp<?= $blog['title'] ?></title>
</head>
<body>
<h1>Title : <?= $blog['title'] ?></h1>
</body>
</html>
*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>codekamp</title>
</head>
<body>
	<h2>To edit this post </h2>
	<?php
		echo '<li><a href="edit.php?id=' . $id . '">' . "Click Here" . '</a></li>';
?>
</body>
</html>
