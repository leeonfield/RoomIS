<?php
require('connect.php');

// print_r($_POST);
$flagid=7;
$name=$_POST['name'];
$pass=$_POST['pass'];
$id=$_POST['id'];


$sql=" insert into user (userid,username,password,authid,tel) values ('$id', '$name', '$pass', '1', '13990169073')";






mysqli_query($con,$sql);

echo"<script> alert('添加成功');window.location.href='manageruser.php';</script>";




?>