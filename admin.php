<?php
require('connect.php');
$loginname=$_COOKIE["loginname"];
$sql="select * from orderlist";
$query=mysqli_query($con,$sql);
if($query&&mysqli_num_rows($query)){
    while($row=mysqli_fetch_assoc($query)){
        $data[]=$row;
        // print_r($row);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>教室管理系统</title>
<!--     <script src="jquery1.12/jquery-1.12.2.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"> -->
    <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
                <h3>教室管理</h3>
            </div>
            <div class="col-md-12">
             <div class="col-md-2 col-md-offset-3"><a href="admin.php"><h3>教室管理</h3></a></div>
             <div class="co-md-2"><a href="manageruser.php"><h3>用户管理</h3></a></div>

         </div>  

         <div class="col-md-2 pull-right" style="margin-top: 20px;margin-bottom: 10px;">

            <form action="exit.php" method="post">
                <input class="col-md-6 btn btn-default" type="submit" value="登出"/>
            </form>
        </div>
    </div>




    <div class="col-md-12 " style="background-color: #DDE3EB; margin-top:10px;border-radius: 8px;">
        <div class="col-md-2 text-center col-md-offset-1"><h4>教室</h4></div>
        <div class="col-md-2 text-center"><h4>预约时间</h4></div>
        <div class="col-md-2 text-center"><h4>预约人</h4></div>

        <div class="col-md-2 col-md-offset-1 "><h4>取消</h4></div>
    </div>
    <div class="col-md-12 text-center" style="overflow:scroll;overflow-x:hidden;  height: 450px;">
        <?php
        if(!empty($data)){
            foreach($data as $value) {
                ?>
                <form class="col-md-12" action="cancel.php" method="post"role="form" style="margin-top: 20px; ">
                    <div class="col-md-2 text-center col-md-offset-1" style="line-height:30px;border:0;" ><?php echo $value['roomnum']; ?></div>
                    <div class="col-md-2 " style="padding-left: 40px;">
                        <div class="col-md-1"><?php echo $value['ordertime'][5];echo $value['ordertime'][6]; ?></div>
                        <div class="col-md-1">月</div>
                        <div class="col-md-1 " ><?php echo $value['ordertime'][8];echo $value['ordertime'][9]; ?></div>
                    </div>
                    <div class="col-md-2 text-center " style="line-height:30px;border:0;" ><?php echo $value['username']; ?></div>

                    <input  type="hidden" name="number" style="width: 0px;" value=<?php echo $value['roomnum']; ?> />
                    <input  type="hidden" name="month" style="width: 0px;" value=<?php echo $value['ordertime'][5];echo $value['ordertime'][6]; ?> />
                    <input  type="hidden" name="day" style="width: 0px;" value=<?php echo $value['ordertime'][8];echo $value['ordertime'][9]; ?> />

                    <input type="submit" class="btn btn-danger col-md-1 col-md-offset-1" value="取消" />
                </form>
                <?php
            }
        }
        ?>
    </div>
</div>
</body>
</html>