$(function(){ 

	var headerHeight = $('#main-header').height();
	$('#main-content').css('margin-top', headerHeight);

	$( window ).resize(function(){
		var headerHeight = $('#main-header').height();
		$('#main-content').css('margin-top', headerHeight);
	}); 

});