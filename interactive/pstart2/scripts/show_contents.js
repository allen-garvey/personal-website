function show_contents(caller){
	var ancestor = $(caller).closest('.menu_container');
	var menu_contents = ancestor.find('.menu_contents');
	menu_contents.toggleClass('menu_contents_active');
	var menu_title = ancestor.find('.menu_title');
	menu_title.toggleClass('menu_title_clicked');
	
	if(window.innerWidth <= 600  && menu_title.hasClass('menu_title_clicked')){
		// window.scrollBy(0, menu_title.height());
		window.scrollTo(0, menu_contents.offset()['top']);
	}
}