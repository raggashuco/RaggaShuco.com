$(function(){
	var topBtn = $('#scrollTop');
	topBtn.hide();
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100){
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロール
	topBtn.click(function(){
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});