jQuery(document).ready(function($){
	
	//Get the height of #content and #sidebar
	content_height = $('#content').height();
	sidebar_height = $('#sidebar').height();
		
	if (content_height > sidebar_height){
		
		$('#content').css('background-image', 'url(' + mt_malachi_main_js_vars.img_dir + '/bg-border.png)');
		$('.content-inner').css('margin-right', '9px');
			
	}
	else{
		
		$('#sidebar').css('background-image', 'url(' + mt_malachi_main_js_vars.img_dir + '/bg-border.png)');
		$('#sidebar').css('padding-left', '9px');
		
	}	
	
});
