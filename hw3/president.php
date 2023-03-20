<?php
session_start();

if($_SESSION["login"]=="president"){
    
}else{
    header("location:error_hw3.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>President Page</title>
</head>
<body>

I'm the president in this university!</br>
<a href="teacher.php">To teacher page.</a></br>
<a href="logout_hw3.php">logout</a></br> 
</body>
</html>