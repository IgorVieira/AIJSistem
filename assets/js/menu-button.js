$(document).ready(function(){
	$('.handle').on('click', function(){
		$('nav ul').toggleClass('showing');
	});
	$("a").click(function(){
        $('.showing').toggleClass();
    });

	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});