<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>单页应用 - 联系人管理</title>

    <!-- css -->
    <link href="css/cssreset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-brand">单页应用—联系人管理器</div>
    </div>
</nav>
<div class="container" id="app">
    <div>
        <h4><b>联系人</b></h4>
    </div>
    <div id="editform" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">编辑</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="userinfo_insert.php" method="post">
                <div class="form-group">
                    <label class="col-md-2 control-label">姓名：</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="username" placeholder="请输入姓名">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">性别：</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="sex">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">电话号码：</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
<!--                        <button class="btn btn-primary">新增</button>-->
<!--                        <button class="btn btn-primary" type="submit">提交</button>-->
<!--                        <button class="btn btn-danger">删除</button>-->
                        <input type="submit" value="提交">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/vue.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>