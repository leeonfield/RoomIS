<?php

require('connect.php');
// print_r($_POST);
$number=$_POST['number'];
$month=$_POST['month'];
$day=$_POST['day'];
$loginname=$_COOKIE["loginname"];



$sql="delete from orderlist where ordertime='2016-$month-$day' and roomnum=$number";
$query=mysqli_query($con,$sql);
if(!strcmp($loginname,'leon')){
	echo "<script>alert('删除成功');window.location.href='userlist.php'</script>";
}else{
	echo "<script>alert('删除成功');window.location.href='admin.php'</script>";

}

?>