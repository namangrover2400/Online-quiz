<?php
include("class/users.php");
$adsign=new users;
extract($_POST);
if($adsign->adsignin($e,$p))
{
	$adsign->url("admin/index.php");
}
else
{
	$adsign->url("login1.php?run=failed");
}
?>