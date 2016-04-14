<?php

require('config.php');
//连库
if(!($con=mysqli_connect(HOST,USERNAME,PASSWORD))){
	echo mysql_error();
}
if(!mysqli_select_db($con,'roomis')){
	echo mysql_error();
}
if(mysqli_query($con,'set names utf8')){
	echo mysql_error();
}
?>