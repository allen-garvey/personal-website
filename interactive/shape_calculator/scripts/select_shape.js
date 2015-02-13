//sets all shape container divs except the selected one changed to the class .shape_container_deselected
//and changes the selected div to the class .shape_container_selected

function select_shape(selected_shape_container_div){
	var selected_divs = document.getElementsByClassName('shape_container_selected');
	var default_divs = document.getElementsByClassName('shape_container');

	for (var i = selected_divs.length - 1; i >= 0; i--) {
		selected_divs[i].className = 'shape_container_deselected';
	};
	for (var i = default_divs.length - 1; i >= 0; i--) {
		default_divs[i].className = 'shape_container_deselected';
	};
	selected_shape_container_div.className = 'shape_container_selected';
	
	document.getElementById('button_div').style.display = 'block';
	document.getElementById('calculation_results').innerHTML = '';
}