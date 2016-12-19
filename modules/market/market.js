define(["text!./market.html", "css!./market.css"], function(marketPage){

	return{
			init : function(){
				//if($(".home").children().size()>0) return;
				$(".market").html(marketPage).show().siblings("div").hide();
				$("#hedaer").show();

			}
		}
});
