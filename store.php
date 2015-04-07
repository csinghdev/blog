<?php
  $id = $_POST['id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  require_once "config.php";

  $sql = "INSERT INTO blog (id,title,content) VALUES ('$id','$title','$content')";

  if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
  }
  
  require_once "index.php";
?>
