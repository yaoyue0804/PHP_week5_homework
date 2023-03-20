<?php
session_start();

$pID="president";
$pPWD="qwerty";
$tID="teacher";
$tPWD="asdfgh";
$sID="student";
$sPWD="zxcvbn";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($pID==$id)&&($pPWD==$pwd)){
    $_SESSION["login"]="president";
    header("location:president.php");

}elseif(($tID==$id)&&($tPWD==$pwd)){
    $_SESSION["login"]="teacher";
    header("location:teacher.php");

}elseif(($sID==$id)&&($sPWD==$pwd)){
    $_SESSION["login"]="student";
    header("location:student.php");
}else{
    $_SESSION["login"]="fail";
    header("location:fail_hw3.php");
}


?>