//used to validate input currency value and display the results

function value_is_valid(value){
	return !isNaN(parseFloat(value)) && isFinite(value) && value > 0;
}

function display_validation(input_box){
	if(value_is_valid(input_box.value)){
		input_box.className = 'valid';
	}
	else{
		input_box.className = 'invalid';
	}
}