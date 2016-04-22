<?php
require('connect.php'); 
$sql="select * from room";
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
    <!-- <script src="jquery1.12/jquery-1.12.2.min.js"></script> -->
    <!-- <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> -->
    <!-- <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css"> -->
   <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
   <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
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
                <h3>教室预约</h3>
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

        <form action="search.php" method="post" role="form" class="col-md-12 " style="margin-top: 20px;margin-bottom: 10px;">
            <div class=" col-md-2 col-md-offset-1 text-center">
                <!-- form-group -->
               <!--  <span>区:</span>
                <select name="zone" id="" class="form-control ">
                    <option  value="" >east</option>
                    <option   value="">west</option>
                </select> -->
            </div>
            <div class="form-group col-md-2 text-center">
                <span>教室:</span>
                <input class="text-center" name ="number" style="line-height: 30px;border-radius: 5px;"value=""></input>
            </div>
            <div class="form-group col-md-2 text-center">
                <span>时间:</span>
                <br/>
                <input class="text-center " name="month" style="line-height: 30px;width:40px;border-radius: 5px;"value=""></input><span>月</span>
                <input class="text-center " name="day" style="line-height: 30px;width:40px;border-radius: 5px;"value=""></input><span>日</span>
            </div>
            <div class="form-group col-md-1 text-center">
                <span>搜索</span>
                <input style=""type="submit" class="btn btn-default" value="搜搜" />
            </div>

        </form>
        <div class="col-md-12 " style="background-color: #DDE3EB; margin-top:10px;border-radius: 8px;">
            <div class="col-md-2 text-center col-md-offset-2"><h4>教室</h4></div>
            <div class="col-md-2 text-center"><h4>预约时间</h4></div>
            <div class="col-md-1 col-md-offset-1"><h4>预约</h4></div>
        </div>
        <!-- <form class="col-md-12" action="order.php" method="post"role="form" style="margin-top: 20px;">
            <div class="col-md-2 text-center col-md-offset-2" style="line-height:30px;border:0;" ><?php echo $value['roomnum']; ?></div>
            <div class="col-md-2 " style="padding-left: 40px;">
                <div class="col-md-1">3</div>
                <div class="col-md-1">月</div>
                <div class="col-md-1 " >20</div>
            </div>
            <input  type="hidden" name="number" style="width: 0px;" value=<?php echo $value['roomnum'];?>/>
            <input  type="hidden" name="month" style="width: 0px;" value="3" />
            <input  type="hidden" name="day" style="width: 0px;" value="20" />

            <input type="submit" class="btn btn-success col-md-1 col-md-offset-1" />
        </form> -->


        <div class="col-md-12 text-center" style="overflow:scroll;overflow-x:hidden;  height: 480px;">


            <?php
            foreach ($data as $value) {

                ?>
                <form class="col-md-12" action="order.php" method="post"role="form" style="margin-top: 20px;">
                    <div class="col-md-2 text-center col-md-offset-2" style="line-height:30px;border:0;" ><?php echo $value['roomnum']; ?></div>
                    <div class="col-md-2 " style="padding-left: 40px;">
                        <div class="col-md-1">3</div>
                        <div class="col-md-1">月</div>
                        <div class="col-md-1 " >20</div>
                    </div>
                    <input  type="hidden" name="number" style="width: 0px;" value=<?php echo $value['roomnum']; ?> />
                    <input  type="hidden" name="month" style="width: 0px;" value="3" />
                    <input  type="hidden" name="day" style="width: 0px;" value="20" />

                    <input type="submit" class="btn btn-success col-md-1 col-md-offset-1" />
                </form>

                <?php

            }
            ?>
        </div>

    </div>



</body>
</html>