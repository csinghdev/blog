<?php

    if(isset($_COOKIE['blog-cookie']))
    {
        require_once "config.php";
        $query = "SELECT * FROM `session`";
	  	$result = $connection->query($query);
		$indexOfCookie=$result->fetch_all(MYSQLI_ASSOC);
		foreach($indexOfCookie as $cookie)
		{
			if($cookie['sid']===$_COOKIE['blog-cookie'])
			{
				echo "Hello ".$cookie['userid'] ." | " . '<a href="logout.php">' . "Logout" . '</a>';
				$checkvar=TRUE;
				break;
			}
		}
    }
    else
    {
    	echo '<a href="login.php">' . "Login" . '</a>';
    }
?>