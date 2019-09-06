 var _PAGE_SIZE = 10;
 
 var _ONCLICK = "click",
     _ONDBCLICK = "doubletap",//双击屏幕
     _ONLONGCLICK = "longtap",//长按屏幕
     _ONHOLD = "hold",//按住屏幕
     _ONRELEASE = "release",//离开屏幕
     _ONSWIPEUP = "swipeup",
     _ONSWIPEDOWN = "swipedown",
     _ONSWIPELEFT = "swipeleft",
     _ONSWIPERIGHT = "swiperight";
	 
(function($) {
	$.toast = function(msg){
		var box = $('<div class="message-box"></div>');
		box.text(msg);
		$("body").append(box);
		box.show();
		window.setTimeout(function(){
			box.hide(1000);box.remove();
		}, 3000);
	};
	
	$.loading = function(isShow){
		var ldbox = $('<div class="ajax-loading"></div>');
		if(isShow){
			ldbox.show();
		}else{
			ldbox.hide();
		}
	};
	
	$.confirm = function(msg, onYes, onNo){
		if(window.confirm(msg)){
			if(onYes) onYes();
		}else{
			if(onNo) onNo();
		}
	};
	
}(window.$ = jQuery.noConflict()||{}));


$(document).ready(function(e) {
	 $(".mui-badge").each(function(index, element) {
        if($(this).text()=='0'||$(this).text()==''){
			$(this).hide();
		}else{
			$(this).show();
		}
     });
 });
 

 