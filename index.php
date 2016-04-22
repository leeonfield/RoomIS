<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>西科教室管理系统</title>
  <!--   <script src="jquery1.12/jquery-1.12.2.min.js"></script>
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
        height:500px;
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

<script type="text/javascript">
   

</script>
    <div class="container">
        <div class="col-md-12 text-center" style="margin-top: 50px;">
            <h3>登录</h3>
        </div>
        <form role="form" class="col-md-12 " method="post" action="login.php" style="margin-top: 50px;">
            <div class="col-md-12">
                <span class="col-md-1 col-md-offset-4 text-center" style="line-height: 30px;font-size: 20px;"> ID:</span>
                <input class="text-center center-block col-md-2"name="id" style="line-height: 30px;border-radius: 5px;"></input>
            </div>
            <div class="col-md-12" style="margin-top: 30px;">
                <span class="col-md-1 col-md-offset-4 text-center"  style="line-height: 30px;font-size: 20px;"> 密码:</span>
                <input class="text-center center-block col-md-2" name="password" type="password" style="line-height: 30px;border-radius: 5px;"></input>
            </div>
            <div class="col-md-12" style="margin-top: 30px;">
                <input  type="submit" class="col-md-2 col-md-offset-5 btn btn-default"/>
            </div>
        </form>
    </div>
<script language="php"></script>

</body>
</html>