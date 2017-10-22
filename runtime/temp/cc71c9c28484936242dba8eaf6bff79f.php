<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"C:\wamp64\www\imageproject\public/../application/index\view\uploads\uploads.html";i:1508687170;s:78:"C:\wamp64\www\imageproject\public/../application/index\view\public\header.html";i:1508393230;s:78:"C:\wamp64\www\imageproject\public/../application/index\view\public\footer.html";i:1508387870;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<script type="text/javascript" src="__INDEX__/js/jquery-1.11.0.js"></script>
		<link rel="stylesheet" href="__INDEX__/css/bootstrap.min.css" />
		<script type="text/javascript" src="__INDEX__/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="__INDEX__/css/zyupload-1.0.0.min.css " type="text/css">
		<script type="text/javascript" src="__INDEX__/js/zyupload-1.0.0.min.js"></script>
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

			<!--上传-->
			<div id="zyupload" class="zyupload"></div>


			<script type="text/javascript">
                $(function(){
                    // 初始化插件
                    $("#zyupload").zyUpload({
                        width            :   "800px",                 // 宽度
                        height           :   "400px",                 // 宽度
                        itemWidth        :   "140px",                 // 文件项的宽度
                        itemHeight       :   "115px",                 // 文件项的高度
                        url              :   "<?php echo url('/index/uploads'); ?>",              // 上传文件的路径
                        fileType         :   ["jpg","png"],// 上传文件的类型
                        fileSize         :   51200000,                // 上传文件的大小
                        multiple         :   true,                    // 是否可以多个文件上传
                        dragDrop         :   true,                    // 是否可以拖动上传文件
                        tailor           :   false,                    // 是否可以裁剪图片
                        del              :   false,                    // 是否可以删除文件
                        finishDel        :   false,  				  // 是否在上传文件完成后删除预览
                        /* 外部获得的回调接口 */
                        onSelect: function(selectFiles, allFiles){    // 选择文件的回调方法  selectFile:当前选中的文件  allFiles:还没上传的全部文件
                            console.info("当前选择了以下文件：");
                            console.info(selectFiles);
                        },
                        onDelete: function(file, files){              // 删除一个文件的回调方法 file:当前删除的文件  files:删除之后的文件
                            console.info("当前删除了此文件：");
                            console.info(file.name);
                        },
                        onSuccess: function(file, response){          // 文件上传成功的回调方法
                            console.info("此文件上传成功：");
                            console.info(file.name);
                            console.info("此文件上传到服务器地址：");
                            console.info(response);
                            $("#uploadInf").append("上传成功，文件地址是：");
                        },
                        onFailure: function(file, response){          // 文件上传失败的回调方法
                            console.info("此文件上传失败：");
                            console.info(file.name);
                        },
                        onComplete: function(response){           	  // 上传完成的回调方法
                            console.info("文件上传完成");
                            console.info(response);
                        }
                    });

                });

			</script>
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