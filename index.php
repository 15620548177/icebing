<?php
require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx32287c4541b40f25", "46d30d275d8158bd9d20fc24884c405d");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<meta charset="UTF-8">
	<title>首页</title>
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script type="text/javascript" src="./js/jquery-1.11.2.js"></script>
		<script type="text/javascript" src="js/baiduTemplate.js"></script>
	<script type="text/javascript" src="./js/swiper.jquery.min.js"></script>
	<script data-main = "app.js" type="text/javascript" src = "./js/require.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	
	
</head>
<body>
	<!-- 	<div class="zhezhao">
		<div>
			<div class="zhezhao-img"></div>
			<p>定位中</p>
		</div>
	</div> -->
	
	<div class="main">
			<div class = "home"></div>
			<div class = "market"></div>
			<div class = "order"></div>
			<div class = "mine"></div>
	</div>


	<header id="header">
		<span></span>
		<p> 物美超市</p>
		<div>
			<span>搜索</span>
		</div>
	</header>
	
	<footer>
		<ul>
			<li>
				<a href="#home">
				<div class="first-page"></div>
				<span>首页</span>
				</a>
			</li>
			<li>
				<a href="#market">
				<div class="supermaket"></div>
				<span>闪送超市</span>
				</a>
			</li>
			<li>
				<a href="#order">
				<div class="shop-car"></div>
				<span>购物车</span>
				</a>
			</li>
			<li>
				<a href="#mine">
				<div class="myd"></div>
				<span>我的</span>
				</a>
			</li>
		</ul>
	</footer>
</body>
	<script type="text/javascript">
		(function(){
			var calc = function(){
        		var docElement = document.documentElement;
        		var clientWidthValue = docElement.clientWidth > 480 ? 480 : docElement.clientWidth;
        		docElement.style.fontSize = 10*(clientWidthValue/320) + 'px';
			}
			calc();
			window.addEventListener('resize',calc);
			var mySwiper = new Swiper('.swiper-container', {
				autoplay: 2000,//可选选项，自动滑动(时间:毫秒)
				loop : true,//循环
				pagination : '.swiper-pagination',//分页器
  			 });
		})();

	
		wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
     jsApiList: [
        'checkJsApi',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
	</script>
</html>