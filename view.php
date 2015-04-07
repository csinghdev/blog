<?php
	require_once "config.php";
	$query = "SELECT * FROM blog where id = ".$_GET['id'];
	$result = $connection->query($query);
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2> Content of the post : </h2>" . $row["content"]. "<br>";
    }
	}
?>
