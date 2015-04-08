<?php
  $id = $_POST['id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  require_once "config.php";

  $result = "INSERT INTO blog (id,title,content) VALUES ('$id','$title','$content')";
  //$result = "INSERT INTO blog (id,title,content) VALUES ('{$_POST['id']}','{$_POST['title']}','{$_POST['content']}')";

  if ($connection->query($result) === TRUE)
  {
    $newId = $connection->insert_id;
    echo "New blog created successfully";
  } else
  {
    echo "Error: " . $result . "<br>" . $connection->error;
  }

  require_once "index.php";
?>
