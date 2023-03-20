<?php
session_start();
ob_start();
if($_SESSION["login"]=="fail"){

}else{
    header("location:error_hw3.php");
}
?>
<html>
<head>
<title>Login Failed</title>
</head>
<body>
登入失敗</br>
網頁將在三秒後跳轉至登入頁面或</br>
<a href="index_hw3.php">點選這裡</a>


<?php
header("Refresh:3;url=index_hw3.php");
?>

</body>
</html>
<?php
ob_flush();

?>