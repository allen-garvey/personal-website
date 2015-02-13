function show_contents(caller){
	var ancestor = $(caller).closest('.menu_container');
	ancestor.find('.menu_contents').toggleClass('menu_contents_active');
	ancestor.find('.menu_title').toggleClass('menu_title_clicked');
}