<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\phpStudy\WWW\ECShop\public/../application/admin\view\register\register.html";i:1536226505;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<base href="/">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>后台注册页面</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <!--引用在线js-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>注册</h1>
                            <div class="description">
                            	<p>
	                            	四组注册页面 狂妄！
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>注册一个新账号</h3>
                                    <p>输入一个新的账号和密码(确认密码)</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="<?php echo url('register/register_do'); ?>" method="post" class="login-form">
                                        <div class="form-group">
			                    		<label class="sr-only" for="User_name">User_name</label>
			                        	<input type="text" name="User_name" placeholder="User_name..." class="User_name form-control" id="User_name">
			                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="User_pwd">User_pwd</label>
                                        <input type="password" name="User_pwd" placeholder="User_pwd..." class="User_pwd form-control" id="User_pwd">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="User_pwd1">User_pwd1</label>
                                        <input type="password" name="User_pwd1" placeholder="User_pwd1..." class="User_pwd1 form-control" id="User_pwd1">
                                    </div>
			                        <button type="submit" class="btn">注册</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!--<script>-->

            <!--$(document).ready(function() {-->
                <!--$(document).on('blur','#User_name',function(){-->
                    <!--var User_name = $('#User_name').val();-->
                    <!--if(User_name ==""){-->
                        <!--$('#name').html('<font color="red">不能为空</font>');-->
                    <!--}else if(/^[a-zA-z]{1}\w{5,10}$/.test(User_name)){-->
                        <!--$('#name').html('<font color="red">√</font>');-->
                    <!--}else{-->
                        <!--$('#name').html('<font color="red">用户名必须为6-10位字符，且不能以数字开头</font>');-->
                    <!--}-->
                <!--});-->

                <!--$(document).on('blur','#User_pwd',function(){-->
                    <!--var User_pwd = $('#User_pwd').val();-->
                    <!--if(User_pwd == ""){-->
                        <!--$("#pwd").html('<font color="red">不能为空</font>');-->
                    <!--}else if(/^\w{8,16}$/.test(User_pwd)){-->
                        <!--$('#pwd').html('<font color="red">√</font>');-->
                    <!--}else{-->
                        <!--$('#pwd').html('<font color="red">密码必须为8-16位的字母、数字、下划线</font>');-->
                    <!--}-->
                <!--});-->

                <!--$(document).on('blur','#User_pwd1',function(){-->
                    <!--var User_pwd = $('#User_pwd').val();-->
                    <!--var User_pwd1 = $('#User_pwd1').val();-->
                    <!--if(User_pwd1 ==""){-->
                        <!--$("#pwd1").html('<font color="red">不能为空</font>');-->
                    <!--}else if(pwd == User_pwd1){-->
                        <!--$('#pwd1').html('<font color="red">√</font>');-->
                    <!--}else{-->
                        <!--$("#pwd1").html('<font color="red">确认密码必须与密码保持一致</font>');-->
                    <!--}-->
                <!--});-->
            <!--});-->
            <!--</script>-->
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>