$(document).ready(function(){
	$("a").on('click', function(e) {

		if (this.hash !== "") {
			e.preventDefault();

			let hash = this.hash;
			$('html, body').animate({
				scrollTop: $(this.hash).offset().top
			}, 800, function(){
				window.location.hash = hash;
			});
		}
	});
});