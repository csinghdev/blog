<?php require "header.php" ?>
<h1>Fill form to create a new blog : </h1>
<form action="store.php" method="POST">
<label for="id" >Enter Id : </label>
	<input id="id" type="integer" name="id" placeholder="Enter id here"/>
	<br><br>
  <label for="title" >Enter Title : </label>
  	<input id="title" type="text" name="title" placeholder="Enter title here"/>
  	<br><br>
    <label for="content" >Enter Content : </label>
    	<textarea id="content" type="text" name="content" placeholder="Enter content here"/></textarea>
    <input type="submit" style="..." value="Create" >
</form>
<?php require "footer.php" ?>
