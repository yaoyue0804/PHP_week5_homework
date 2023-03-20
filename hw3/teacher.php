<?php
session_start();

if($_SESSION["login"]=="teacher"){
    
}elseif($_SESSION["login"]=="president"){
    
}else{
    header("location:error_hw3.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Teacher Page</title>
</head>
<body>

I'm the teacher in this university!</br>
<?php
if($_SESSION["login"]=="president"){
    echo '<a href="president.php">'."To president page."."</a>"."</br>";
}elseif($_SESSION["login"]=="teacher"){
    echo '<a href="student.php">'."To student page."."</a>"."</br>";
}
?>

<a href="logout_hw3.php">logout</a></br> 
</body>
</html>