<?php
if(count($_POST))
{
  if($_POST['title']=='')
  {
    $error = "Enter title in the given field";
  }
  else
  {
    require_once "config.php";
    $result = "UPDATE blog SET title='{$_POST['title']}' , content='{$_POST['content']}' WHERE id='{$_POST['id']}'";
    if ($connection->query($result) === TRUE)
    {
      $newId = $connection->insert_id;
      echo "blog updated successfully";
      header("Location:"."view.php?id=" .$_POST['id']);
    }
    else
    {
      echo "Error: " . $result . "<br>" . $connection->error;
    }

  require_once "index.php";
  }
}
?>

<?php require "header.php" ?>
<h1>Edit the blog : </h1>

<?php
	require_once "config.php";
	$query = "SELECT * FROM blog where id = ".$_GET['id'];
	$result = $connection->query($query);
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $content=$row['content'];
    }
	}
?>

<?php
if(isset($error)){
  echo "<span class=\"error\">".$error."</span>";
}
?>

<form action="edit.php" method="POST">
<label for="id" >Enter Id : </label>
	<input id="id" type="integer" name="id" value="<?= $id ?>"/>
	<br><br>
  <label for="title" >Enter Title : </label>
  	<input id="title" type="text" name="title" value="<?= $title ?>"/>
  	<br><br>
    <label for="content" >Enter Content : </label>
    	<textarea id="content" type="text" name="content" /><?= $content ?></textarea>
    <input type="submit" style="..." value="Update" >
</form>
<?php require "footer.php" ?>
