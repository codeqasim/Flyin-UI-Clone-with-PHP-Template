<?php
include "config.php";
$filename = basename($_SERVER['REQUEST_URI']);
if(empty($filename) || $filename == "$domain"){ $filename = "home"; }
$fileOrig = explode(".html",$filename);
include("header.php");
include($fileOrig[0].".php");
include("footer.php");