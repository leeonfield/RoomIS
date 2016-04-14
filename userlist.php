<?php
require('connect.php');
$loginname=$_COOKIE["loginname"];
$sql="select * from orderlist where username='$loginname'";
$query=mysqli_query($con,$sql);
if($query&&mysqli_num_rows($query)){
	while($row=mysqli_fetch_assoc($query)){
		$data[]=$row;
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>西科教室管理系统</title>
	<script src="jquery1.12/jquery-1.12.2.min.js"></script>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
</head>

<style>
	* {
		font-family: "微软雅黑";
	}
	.container{
		margin-top:50px;
		/* background-color:rgb(248, 243, 209); */
		/* box-shadow:5px 5px; */
		box-shadow:2px 2px 3px #aaaaaa;
		border-radius:10px;
		border-top:1px  #ECECEC solid;
		border-left: 1px  #ECECEC solid;

	}
	.orderlist:hover{
		background-color: #EBEEEC;
		border-radius:8px;
	}
	::-webkit-scrollbar{
		width:14px;
	}
	::-webkit-scrollbar-thumb{
		border-radius:10px;
		background-color:gray;
	}
	::-webkit-scrollbar-track{
		border-radius:10px;
		background-color:#EBEEEC;
	}
</style>
<body>
	<div class="container" style="height: 700px;">
		<div class="col-md-12 text-center">
			<div class="col-md-2 col-md-offset-5">
				<a href="user.php"><h3>教室预约</h3></a>
			</div>
			<div class="col-md-2 pull-right" style="margin-top: 20px;margin-bottom: 10px;">
				<form action="userlist.php" method="post">
					<input type="submit" class="col-md-6 btn btn-default" value=<?php echo $_COOKIE["loginname"]; ?> />
				</form>
				<form action="exit.php" method="post">
					<input class="col-md-6 btn btn-default" type="submit" value="登出"/>
				</form>
			</div>
		</div>
        <div class="col-md-12 " style="background-color: #DDE3EB; margin-top:10px;border-radius: 8px;">
        	<div class="col-md-2 text-center col-md-offset-3"><h4>教室</h4></div>
        	<div class="col-md-2 text-center"><h4>预约时间</h4></div>
        	<div class="col-md-2 col-md-offset-1 "><h4>取消</h4></div>
        </div>
        <div class="col-md-12 text-center" style="overflow:scroll;overflow-x:hidden;  height: 480px;">
        	<?php
        	foreach ($data as $value) {
        		?>
        		<form class="col-md-12" action="cancel.php" method="post"role="form" style="margin-top: 20px;">
        			<div class="col-md-2 text-center col-md-offset-3" style="line-height:30px;border:0;" ><?php echo $value['roomnum']; ?></div>
        			<div class="col-md-2 " style="padding-left: 40px;">
        				<div class="col-md-1"><?php echo $value['ordertime'][5];echo $value['ordertime'][6]; ?></div>
        				<div class="col-md-1">月</div>
        				<div class="col-md-1 " ><?php echo $value['ordertime'][8];echo $value['ordertime'][9]; ?></div>
        			</div>
        			<input  type="hidden" name="number" style="width: 0px;" value=<?php echo $value['roomnum']; ?> />
        			<input  type="hidden" name="month" style="width: 0px;" value=<?php echo $value['ordertime'][5];echo $value['ordertime'][6]; ?> />
        			<input  type="hidden" name="day" style="width: 0px;" value=<?php echo $value['ordertime'][8];echo $value['ordertime'][9]; ?> />

        			<input type="submit" class="btn btn-danger col-md-1 col-md-offset-1" value="取消" />
        		</form>
        		<?php
        	}
        	?>
        </div>
    </div>
</body>
</html>