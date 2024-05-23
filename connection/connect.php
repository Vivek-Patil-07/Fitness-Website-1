<?php
{$connect=mysqli_connect("localhost","root","") or die("No Connection");
mysqli_select_db($connect,"gymdb") or die("No Database name");}
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);	
?>
