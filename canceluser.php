<?php

require('connect.php');
print_r($_POST);
$name=$_POST['name'];

print_r($name);


$sql="delete from user where username = '$name'";
$query=mysqli_query($con,$sql);

echo "<script>alert('删除成功'); window.location.href='manageruser.php';</script>";


?>