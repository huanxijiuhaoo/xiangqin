<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<title><?php echo ($media["title"]); ?></title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
</head>

<body>
  
  <div class="hd_main">
      <div class="vipchongzhijilu">
         VIP充值记录
         <a  href="javascript:history.go(-1);" class="fl" id="ddd"><img src="images/zuojian.png"  style="width:11px;">返回</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      </div>
      <!-- div class="vip_nav">
      	<a href="javascript" class="hot">全部</a>
      	
      </div-->
      <div class="vip_lest">
      	<ul class="fujin">
      	
      		<!--#include file="ajax_cz_log.html"-->
      	
      	</ul>
      </div> 

      
	      
  </div>


</body>
<script>
var totalheight = 0;
var body = '';			
var main = $(".fujin"); //主体元素  
var range = 10; //距下边界长度/单位px  
var elemt = 500; //插入元素高度/单位px  
var maxnum = 200; //设置加载最多次数  
var num = 2;
var jz = true;
$(window).scroll(function() {
if(jz==false) return false;
	var srollPos = $(window).scrollTop(); //滚动条距顶部距离(页面超出窗口的高度) 					
	totalheight = parseFloat($(window).height()) + parseFloat(srollPos);
	if (($(document).height() - range) <= totalheight && num != maxnum) {
		$("#loading").show();
		$.getJSON("<?php echo U();?>", {
			p: num,
			ajax: 1,
		}, function(data) {
			$("#loading").hide();
			jz = false;
			if(!data) return false;		
			main.append(data);
			jz = true;
		}, 'json');
		num++;
	}
});	


</script>



</html>