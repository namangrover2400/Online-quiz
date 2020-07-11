<?php
include("class/users.php");
$out=new users;
extract($_POST);

	$out->url("index.php");

?>