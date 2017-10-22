<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"C:\wamp64\www\imageproject\public/../application/index\view\user\login.html";i:1508427283;s:78:"C:\wamp64\www\imageproject\public/../application/index\view\public\header.html";i:1508393230;s:78:"C:\wamp64\www\imageproject\public/../application/index\view\public\footer.html";i:1508387870;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<script type="text/javascript" src="__INDEX__/js/jquery-1.11.0.js"></script>
		<link rel="stylesheet" href="__INDEX__/css/bootstrap.min.css" />
		<script type="text/javascript" src="__INDEX__/js/bootstrap.min.js"></script>
		<style>
			.form-horizontal {
				background: #fff;
				padding-bottom: 40px;
				border-radius: 15px;
				text-align: center;
			}
			
			.form-horizontal .heading {
				display: block;
				font-size: 35px;
				font-weight: 700;
				padding: 35px 0;
				border-bottom: 1px solid #f0f0f0;
				margin-bottom: 30px;
			}
			
			.form-horizontal .form-group {
				padding: 0 40px;
				margin: 0 0 25px 0;
			}

			.form-horizontal .main-checkbox {
				float: left;
				width: 20px;
				height: 20px;
				margin: 5px 0 0 5px;
			}
			
			.form-horizontal .main-checkbox label {
				width: 20px;
				height: 20px;
				top: 0;
				left: 0;
				cursor: pointer;
			}
			
			.form-horizontal .text {
				float: left;
				margin-left: 7px;
				line-height: 20px;
				padding-top: 5px;
				text-transform: capitalize;
			}
			
			.form-horizontal .btn {
				float: right;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<!--导航栏-->
			<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo url('/index/index'); ?>">图床Bata</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo url('/index/index'); ?>">首页</a>
                </li>
                <li>
                    <a href="<?php echo url('/index/uploads'); ?>">上传</a>
                </li>
                <li>
                    <a href="<?php echo url('/index/user/register'); ?>">注册</a>
                </li>
                <li>
                    <a href="<?php echo url('/index/user/login'); ?>">登录</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
			<div class="row">
				<div class="col-md-offset-3 col-md-6">
					<form class="form-horizontal" action="" method="post">
						<span class="heading">用户登录</span>
						<div class="form-group">
							<input type="username" class="form-control" id="username" placeholder="用户名" name="username">
						</div>
						<div class="form-group help">
							<input type="password" class="form-control" id="password" placeholder="密　码" name="password">
						</div>
						<div class="form-group col-lg-4">
							<input type="text" class="form-control" id="code" placeholder="验证码" name="code" >

						</div>
						<div class="col-sm-2">
							<img src="<?php echo captcha_src(); ?>" title="点击更换验证码" onclick="this.src='<?php echo captcha_src(); ?>?' + Math.random();"/ >
						</div>
						<div class="form-group"></div>
						<div class="form-group" >
							<div class="main-checkbox">
								<input type="checkbox" value="ok" id="checkbox1" name="savename" />
								<label for="checkbox1"></label>
							</div>
							<span class="text">记住我</span>
							<button type="submit" class="btn btn-primary">登录</button>
						</div>
					</form>
				</div>
			</div>

			<!--底部-->
			<nav style="text-align: center;">
    <hr />
    <footer>
        <p>© 2017
            <a href="http://hellojava.me">天歌的博客</a>
        </p>
    </footer>
</nav>
		</div>
	</body>

</html>