<?php
require('connect.php');

// print_r($_POST);

$number=$_POST['number'];
$month=$_POST['month'];
$day=$_POST['day'];
$loginname=$_COOKIE['loginname'];
$flag=0;

// $checksql="select * from orderlist where roomnum='$number'";
$checksql="select * from orderlist where ordertime='2016-$month-$day'";
$query=mysqli_query($con,$checksql);

// $query=mysqli_query($con,$query);
if($query&&mysqli_num_rows($query)){
	while($row=mysqli_fetch_row($query)){
		// $data[]=$row;
		 // print_r($loginname);
		print_r($row);
		if(!strcmp($row[1],$number)){
			echo "<script>alert('当天教室不可用');window.location.href='user.php'</script>";
			$flag=1;
			break;
		}
	}
	if(!$flag){
		$sql=" insert into orderlist (roomnum,username,ordertime) values ('$number','$loginname','2016-$month-$day')";
		mysqli_query($con,$sql);
		echo"<script> alert('预约成功');window.location.href='user.php';</script>";
	}

}else{
	print_r($_POST);
	$sql=" insert into orderlist (roomnum,username,ordertime) values ('$number','$loginname','2016-$month-$day')";
	mysqli_query($con,$sql);
	echo"<script> alert(' 预约成功');window.location.href='user.php';</script>";
	// echo "<script>alert('预约成功');</script>";
}










?>