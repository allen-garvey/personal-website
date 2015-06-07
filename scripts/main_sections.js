//script so that icons and titles for the main sections can trigger each other's hover styles
$(document).ready(function($) {
	var sections = ['code', 'artwork', 'music', 'video'];
	var count = sections.length;
	for (var i = count-1; i >= 0; i--) {
		(function(){
			//closure required to save loop variables
			var section = sections[i];
			var jquery_icon_class = 'svg.'+section +'_icon';
			var dom_icon_class = section +'_icon';
			var section_id = '#'+section;
			//for svg hover trigger h3 hover style
			$(jquery_icon_class).hover(function() {
				$(section_id).find('h3').toggleClass('exploded');
			});
			//for h3 hover trigger svg hover style
			$(section_id).find('h3').hover(function() {
				document.getElementsByClassName(dom_icon_class)[0].classList.toggle(section+'_icon_hover'); //jquery can't add or remove classes to svg
			});
		})();	
	};
});