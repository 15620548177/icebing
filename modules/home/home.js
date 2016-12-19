

// window.onload = function() {
// 	// 响应屏幕分辨率变化
// 	document.documentElement.style.fontSize = innerWidth/4.14 +"px";
// 	window.onresize =function(){
// 	  	document.documentElement.style.fontSize = innerWidth/4.14 + "px";
// 	}
// }


define(["text!./home.html","css!./home.css"], function(homePage){
	
		return{
			init : function(){
				//if($(".home").children().size()>0) return;
				$(".home").html(homePage).show().siblings("div").hide();
				$("#hedaer").show();
			}
		}
	
});


	//图片轮播





	
