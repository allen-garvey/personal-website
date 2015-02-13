function send_ajax(php_file_path, json_encoded_string, id_of_div_to_put_results){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST", php_file_path);

	//Send the proper header information along with the request
	xmlhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");

	var results_div = document.getElementById(id_of_div_to_put_results);
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		    var json = xmlhttp.responseText;

		    json = JSON.parse(json)
		    
		    //so that the results_div doesn't read undefined when the back button is pressed after creating schedule
		    if(json.response !== undefined){
		        results_div.innerHTML = json.response;
		    }
		    else{
		        results_div.innerHTML = 'something went wrong';
		    }
		    if(json.script !== undefined){
		    	eval(document.getElementById('validation_listeners').innerHTML);
		    }
		}  
	}
	
	xmlhttp.send(json_encoded_string);
}

function get_input_div(shape_type){
	var shape = {shape : shape_type};
	var json_shape = JSON.stringify(shape);
	document.getElementById('calculate_button').onclick = function(){calculate(shape_type)};
	send_ajax('get_input_div.php', json_shape, 'input_div');
}

function calculate(shape_type){
	var circle = ['radius'];
	var rectangle = ['length', 'width'];
	var triangle = ['side_1', 'side_2', 'side_3'];
	var sphere = ['radius'];
	var cylinder = ['radius', 'height'];
	var rectangular_prism = ['length', 'width', 'height'];
	var triangular_prism = ['side_1', 'side_2', 'side_3', 'height'];

	var shape_object = new Object();
	shape_object['shape'] = shape_type;

	if(shape_type === 'circle'){
		var shape_variable_array = circle;
	}
	else if(shape_type === 'rectangle'){
		var shape_variable_array = rectangle;
	}
	else if(shape_type === 'triangle'){
		var shape_variable_array = triangle;
	}
	else if(shape_type === 'sphere' || shape_type === 'sphere_composed'){
		var shape_variable_array = sphere;
	}
	else if(shape_type === 'rectangular_prism' || shape_type === 'rectangular_prism_composed'){
		var shape_variable_array = rectangular_prism;
	}
	else if(shape_type === 'triangular_prism' || shape_type === 'triangular_prism_composed'){
		var shape_variable_array = triangular_prism;
	}
	else if(shape_type === 'cylinder' || shape_type === 'cylinder_composed'){
		var shape_variable_array = cylinder;
	}
	else{
		//something went wrong
		document.getElementById('calculation_results').innerHTML = shape_type + ' not a valid shape type for calculation (ajax_controller)';
		return;
	}
	for (var i = shape_variable_array.length - 1; i >= 0; i--) {
		var variable = shape_variable_array[i];
		var variable_value = document.getElementById(variable).value;
		if(!value_is_valid(variable_value)){
			document.getElementById('calculation_results').innerHTML = 'Please enter numbers greater than 0';
			return;
		}
		shape_object[variable] = variable_value;
	};
	json_shape_object = JSON.stringify(shape_object);

	send_ajax('calculate_shape.php', json_shape_object, 'calculation_results');

}



