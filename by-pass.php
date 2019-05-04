<?php
session_start();
$_SESSION['by_pass']=1;
header("Location:http://www.lacoursedeblainville.com");
?>