<?php
include("class/users.php");
$signin=new users;
extract($_POST);
//print_r($_POST);die;
if($signin->signin($e,$pw)){
	$signin->url("dashboard.php");
}else{
	$signin->url("index.php?run=failed");
}
?>