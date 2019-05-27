<?php /*a:2:{s:58:"H:\project\hj_shop/public/themes/admin/default/\login.html";i:1558670186;s:63:"H:\project\hj_shop/public/themes/admin/default/public\head.html";i:1558677994;}*/ ?>
<!doctype html>
<html class="x-admin-sm" lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="http://hj_shop.com/themes/admin/default/public/assets/css/font.css">
    <link rel="stylesheet" href="http://hj_shop.com/themes/admin/default/public/assets/css/xadmin.css">
    <!-- <link rel="stylesheet" href="http://hj_shop.com/themes/admin/default/public/assets/css/theme5.css"> -->
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://hj_shop.com/themes/admin/default/public/assets/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://hj_shop.com/themes/admin/default/public/assets/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        // 是否开启刷新记忆tab功能
        // var is_remember = false;
    </script>
    <style>
        .td-manage i{
            font-size: 20px !important;
        }
    </style>
<link rel="stylesheet" href="http://hj_shop.com/themes/admin/default/public/assets/css/login.css">
<link rel="stylesheet" href="http://hj_shop.com/themes/admin/default/public/assets//css/xadmin.css">
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<title>后台登录-火箭商城管理系统</title>
</head>
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        <div class="message">电商管理登录</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" class="layui-form" action="<?php echo url('admin/public/loginPost'); ?>">
            <input name="user[user_login]" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="user[user_password]" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              // layer.msg('玩命卖萌中', function(){
              //   //关闭后的操作
              //   });
              //监听提交
              form.on('submit(login)', function(data){
                // alert(888)
                  var url = "<?php echo url('admin/public/loginPost'); ?>";
                $.post(url,data.field,function(res){
                    console.log(res);
                    if (res.code === 1){
                        window.location.href = res.url;
                    }
                });
                return false;
              });
            });
        })
    </script>
    <!-- 底部结束 -->
</body>
</html>