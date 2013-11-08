// MusicalFeeds
// Developer: Biak Sang

(function($){

	// GLOBAL VARIABLES
	// ////////////////////////////////////

	// Genres Variable
	var genres 			= $('#genres'),
			home				= $('.home'),
			genre_menu 	= $('.genre_menu')
			video       = $('.postVideo');
	;

	$("#bottomSidebar").sticky({ topSpacing: 70 });
	$("#genres").sticky({ topSpacing: 50 });

	var click = false;

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

	genre_menu.click(function() {
			genre_menu.parent().removeClass('active');
			$(this).parent().addClass('active');
			$(this).parent().animate({opacity: 1}, 1000);
	});



	$("#video-dialog").dialog({
		autoOpen: false,
		height: 260,
		width: 400,
		modal: true,
		show: {
			effect:'blind',
			duration: 1000
		},
		hide: {
			effect: 'drop',
			duration: 500
		},
		buttons: {
			"Add Video": function() {
				if(video.val() != '')
				{
					$('.postVideoInvisible').append(video.val());
					$(this).dialog("close");
				}else {
					video.addClass('error');
				}
			},
			Cancel:function() {
				$(this).dialog("close");
			}
		}
	});

	$(".embedVideo").click(function(){
		$("#video-dialog").dialog("open");
	})

})(jQuery);