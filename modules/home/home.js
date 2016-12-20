

define(["text!./home.html","css!./home.css"], function(homePage){
	
		return{
			init : function(){
				//if($(".home").children().size()>0) return;
				$(".home").html(homePage).show().siblings("div").hide();
				$("#header").show();
			}
		}
	
});







	
