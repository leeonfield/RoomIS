<?php

require_once('connect.php');

$userid=$_POST['id'];
$password=$_POST['password'];
$selectuser="select * from user where username = '$userid'";
$query=mysqli_query($con,$selectuser);
// print_r($password);
if($query&&mysqli_num_rows($query)){
	$userinfo=mysqli_fetch_row($query);
	if(!strcmp($userinfo[2],$password)){
	// print_r(mysqli_fetch_row($query));
		if($userinfo[3]){
			setcookie("loginname",$userinfo[1]);

			echo"<script>alert('登陆成功');window.location.href='user.php';	</script>";
		}else{
			setcookie("loginname",$userinfo[1]);
			
			echo"<script>alert('登陆成功');window.location.href='admin.php';</script>";
		}
	}else{
		echo"<script>alert('密码错误');window.location.href='index.php'</script>";
	}
}
else{
	echo "<script>alert('用户ID错误');window.location.href='index.php'</script>";
}
// &&mysqli_num_rows($query)
 // document.getElementById('name').value='$userinfo[1]';
?>

