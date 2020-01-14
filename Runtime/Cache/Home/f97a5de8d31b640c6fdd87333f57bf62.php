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
	    <div class="vipchongzhijilu">支出明细<a href="<?php echo U('Home/User/MyMoney');?>" class="fl" id="ddd"><img src="images/zuojian.png"  style="width:11px;">返回</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	      
	      <div class="vip_nav">	      	
	      	<a href="<?php echo U('MyCostLog',array('type' => 1));?>" <?php if($type == 1): ?>class="hot"<?php endif; ?> >送礼</a>
	       	<?php if($sex == 1): ?><a href="<?php echo U('MyCostLog',array('type' => 5));?>" <?php if($type == 5): ?>class="hot"<?php endif; ?> >聊天</a>
				<a href="<?php echo U('MyCostLog',array('type' => 7));?>" <?php if($type == 7): ?>class="hot"<?php endif; ?> >照片</a><?php endif; ?>
			
			<?php if($sex == 2): ?><a href="<?php echo U('MyCostLog',array('type' =>9));?>" <?php if($type == 9): ?>class="hot"<?php endif; ?> >提现</a><?php endif; ?>
			
	      </div>
	      
	      <div class="vip_lest">
	      	<ul>      		
      			<!--#include file="ajax_user_money_log.html"--> 
	      	</ul>
	      </div>
	      <input type="hidden" id="batman" value="<?php echo ($type); ?>" />
	      <!--<div><?php echo ($page); ?></div>-->
	  </div>
	</body>
	<script type="text/javascript">
	
		var totalheight = 0; //总高
		var body = '';	//
		var main = $(".vip_lest ul"); //主体元素  
		var range = 10; //距下边界长度/单位px  
		var elemt = 500; //插入元素高度/单位px  
		var maxnum = 200; //设置加载最多次数  
		var num = 2;
		var jz = true;
		var type = $('#batman').val();
			
		$(window).scroll(function() {
			if(jz==false) return false;			
			var srollPos = $(window).scrollTop(); //滚动条距顶部距离(页面超出窗口的高度) 	
			totalheight = parseFloat($(window).height()) + parseFloat(srollPos); //滚动条的高度  + 滚动条距离顶部的高度
			if (($(document).height() - range) <= totalheight && num != maxnum) {
//				$("#loading").show();
				$.getJSON("<?php echo U('Home/User/MyCostLog');?>", {
					p: num,
					ajax: 1,
					type:type,
				}, function(data) {
//					$("#loading").hide();
					jz = false;
					if(!data) return false;
					main.append(data);
				}, 'json');
				num++;
			}
		});	
	</script>
</html>