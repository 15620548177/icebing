define(["text!./dingwei.html","css!./dingwei.css"], function(dingweiPage){
	
		return{
			init : function(){
				//if($(".home").children().size()>0) return;
				$(".dingwei").html(dingweiPage).show().siblings("div").hide();
			}
		}
	
});
