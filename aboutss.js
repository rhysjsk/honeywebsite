$(function(){
$('#ss > img:gt(0)').hide();
	setInterval(function(){
		$('#ss > :first-child').fadeOut(1000)
		.next('img').fadeIn(1000)
		.end().appendTo('#ss');
	}, 4000);
});