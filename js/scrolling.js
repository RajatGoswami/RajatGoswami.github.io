$(document).ready(function(){
	$("a").on('click', function(e) {

		if (this.hash !== "") {
			e.preventDefault();

			$('html, body').animate({
				scrollTop: $(this.hash).offset().top
			}, 800, function(){
				window.location.hash = this.hash;
			});
		}
	});
});