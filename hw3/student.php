<?php
session_start();

if($_SESSION["login"]=="teacher"){
    
}elseif($_SESSION["login"]=="student"){
    
}else{
    header("location:error_hw3.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Student Page</title>
</head>
<body>

I'm the student in this university!</br>
<?php
if($_SESSION["login"]=="teacher"){
    echo '<a href="teacher.php">'."To teacher page."."</a>"."</br>";
}
?>

<a href="logout_hw3.php">logout</a></br> 
</body>
</html>