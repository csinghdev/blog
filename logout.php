<?php
    setcookie("blog-cookie", "", time()-3600);
    header("Location: index.php");
?>