// MusicalFeeds
// Developer: Biak Sang

(function($){

	// GLOBAL VARIABLES
	// ////////////////////////////////////

	// Genres Variable
	var genres 		= $('#genres'),
		home		= $('.home'),
		rock 		= $('.rock'),
		country 	= $('.country'),
		pop 		= $('.pop'),
		classic 	= $('.classic'),
		jazz 		= $('.jazz'),
		blues 		= $('.blues'),
		rap 		= $('.rap'),
		menu 		= $('.menu')
	;

	$("#bottomSidebar").sticky({ topSpacing: 70 });
	$("#genres").sticky({ topSpacing: 50 });

	var click = true;

	// Sortable Menu
	genres.sortable({ 
		containment: "parent",
		tolerance: 	"pointer",
		revert: true,
		opacity: .60
	});

	home.parent().animate({opacity: 1}, 1000);
	home.parent().addClass('active');

	// Events

	home.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.rock, .country, .pop, .classic, .jazz, .blues, .rap').parent().removeClass('active');
			$('.rock, .country, .pop, .classic, .jazz, .blues, .rap').parent().css('opacity', .3);
		}
	});

	rock.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.home, .country, .pop, .classic, .jazz, .blues, .rap').parent().removeClass('active');
			$('.home, .country, .pop, .classic, .jazz, .blues, .rap').parent().css('opacity', .3);
		}
	});

	country.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.home, .rock, .pop, .classic, .jazz, .blues, .rap').parent().removeClass('active');
			$('.home, .rock, .pop, .classic, .jazz, .blues, .rap').parent().css('opacity', .3);
		}
	});

	pop.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.home, .rock, .country, .classic, .jazz, .blues, .rap').parent().removeClass('active');
			$('.home, .rock, .country, .classic, .jazz, .blues, .rap').parent().css('opacity', .3);
		}
	});

	classic.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.home, .rock, .country, .pop, .jazz, .blues, .rap').parent().removeClass('active');
			$('.home, .rock, .country, .pop, .jazz, .blues, .rap').parent().css('opacity', .3);
		}
	});

	jazz.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.home, .rock, .country, .pop, .classic, .blues, .rap').parent().removeClass('active');
			$('.home, .rock, .country, .pop, .classic, .blues, .rap').parent().css('opacity', .3);
		}
	});

	blues.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.home, .rock, .country, .pop, .classic, .jazz, .rap').parent().removeClass('active');
			$('.home, .rock, .country, .pop, .classic, .jazz, .rap').parent().css('opacity', .3);
		}
	});

	rap.click(function() {
		if(click == true) {
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);

			$('.home, .rock, .country, .pop, .classic, .jazz, .blues').parent().removeClass('active');
			$('.home, .rock, .country, .pop, .classic, .jazz, .blues').parent().css('opacity', .3);
		}
	});

})(jQuery);