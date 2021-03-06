<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台</title>
	<link rel="stylesheet" href="./layui/css/layui.css">
	<script src="./layui/layui.js"></script>
	<link rel="stylesheet" href="css/main.css">
	
</head>
<body>
	<div class="layui-layout layui-layout-admin layui-bg-molv">
	  	<div class="layui-header layui-bg-cyan">
	  		<div class="layui-logo">
	  			layui后台管理
	  		</div>
	  		<div class="tool">
	  			<a href="javascript:;" class="layui-icon"><</i> 
	  		</div>
	  		
		    <ul class="layui-nav layui-layout-right">
		    	<li class="layui-nav-item">
		    		<a href="javascript:;">前台入口</a>
		    	</li>
		      <li class="layui-nav-item">
		        <a href="javascript:;">
		          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
		          贤心
		        </a>
		        <dl class="layui-nav-child">
		          <dd><a href="">基本资料</a></dd>
		          <dd><a href="">安全设置</a></dd>
		          <dd><a href="">退出登录</a></dd>

		        </dl>
		      </li>
		    </ul>
	  	</div>
	  
	  <div class="layui-side layui-bg-cyan">
	    <div class="layui-side-scroll ">
	      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
	      <ul class="layui-nav layui-bg-cyan layui-nav-tree"  lay-filter="test">
	        
	        <li class="layui-nav-item">
	          <a href="javascript:;">内容管理</a>
	          <dl class="layui-nav-child">
	            <dd><a href="javascript:;" value="tieziList.html">帖子管理</a></dd>

	            <dd><a href="javascript:;" value="huifuList.html">回复管理</a></dd>
	            <dd><a href="javascript:;" value="tieziRecycle.html ">帖子回收站</a></dd>
	          </dl>
	        </li>
	        <li class="layui-nav-item ">
	          <a class="" href="javascript:;">用户管理</a>
	          <dl class="layui-nav-child">
	            <dd><a href="javascript:;" value="UserList.php">普通用户</a></dd>
	            <dd><a href="javascript:;">管理员</a></dd>
	            <dd><a href="javascript:;">黑名单</a></dd>

	          </dl>
	        </li>
	        <li class="layui-nav-item">
	        	<a href="javascript:;">扩展管理</a>
	        	<dl class="layui-nav-child">
	        		<dd><a href="javascript:;">友情链接</a></dd>
	        		<dd><a href="javascript:;">论坛公告</a></dd>
	        		<dd><a href="javascript:;">更新日志</a></dd>
	        		<dd><a href="javascript:;">给我留言</a></dd>
	        		<dd><a href="javascript:;">论坛信息</a></dd>

	        	</dl>
	        </li>
	        <li class="layui-nav-item">
	        	<a href="javascript:;">其他信息</a>
	        	<dl class="layui-nav-child">
	        		<dd><a href="javascript:;">操作日志</a></dd>
	        	</dl>
	        </li>
	      </ul>
	    </div>
	  </div>
	  
	  <div class="layui-body">
	    <!-- 内容主体区域 -->
	   
		<div class="layui-tab layui-tab-brief" lay-filter="tab" lay-allowClose="true">
			<ul id="tabTitle" class="layui-tab-title">
			   <li lay-id="0" class="layui-this">首页</li>


			</ul>
			<div class="layui-tab-content">
				<div class="layui-tab-item layui-show">
					<p style="padding: 10px 15px; margin-bottom: 20px; margin-top: 10px; border:1px solid #ddd;display:inline-block;">
                    上次登陆
                    <span style="padding-left:1em;">IP：121.28.98.226</span>
                    <span style="padding-left:1em;">地点：未知</span>
                    <span style="padding-left:1em;">时间：2018/1/31 11:29:35</span>
                </p>
				</div>
			  	
			</div>
	  </div>
	  
	  <div class="layui-footer">
	    <!-- 底部固定区域 -->
	    © layui.com - 底部固定区域
	  </div>
	</div>
	<!-- 引入自定义的js文件 -->
	<script src="./js/main.js"></script>
</body>
</html>