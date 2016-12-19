require.config({
	paths:{
		//js文件省略掉文件类型
		"jquery": "./js/jquery-1.11.2",
		"backbone": "./js/backbone",
		"underscore" :"./js/underscore",
		"text" :"./js/text",
		"css" :"./js/css"
		}
		
});       

require(['jquery','backbone','router.js'],function($,Backbone){
    Backbone.history.start();
});

