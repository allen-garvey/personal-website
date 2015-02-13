function reload_and_change_categories(select_id) {
	var category_select = document.getElementById(select_id);
	console.log(category_select.options[category_select.selectedIndex].value);
	window.location.href = "categories.php?category="+category_select.options[category_select.selectedIndex].value;
}