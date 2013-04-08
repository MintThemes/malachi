jQuery(document).ready(function(){
	initTextarea('.comment-form .textarea','textarea','textarea-active');
	initTextarea('.comment-form .text','input','text-active');	

});

function initTextarea(_holder,_filed,_class){
	var areaHolder = $(_holder);
	var activeClass = _class;
	areaHolder.each(function(){
		var _this = $(this);
		var area = _this.find(_filed);
		area.focus(function(){_this.addClass(activeClass);}).blur(function(){_this.removeClass(activeClass);});
	});
}
