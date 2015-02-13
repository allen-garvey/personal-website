<?php


function get_time_cell($id, $example_text=Null){
	if($example_text === Null){
		$example_text = "Example Text";
	}
	$cell = "<td id='cell$id'>
				<textarea rows='5' cols='15' id='text_area$id'>$example_text</textarea>
			</td>";
	return $cell;

}


function get_single_cell($id, $example_text=Null){
	if($example_text === Null){
		$example_text = "Example Text";
	}
	$cell = "<td id='cell$id'>
				<textarea rows='5' cols='25' id='text_area$id'>$example_text</textarea>
			</td>";
	return $cell;

}


function get_table_spanning_cell($id, $example_text=Null, $colspan=Null){
	if($example_text === Null){
		$example_text = "Example Text";
	}
	if($colspan===Null){
		$colspan = '5';
	}

	$cell = "<td colspan='$colspan' id='cell$id'>
				<textarea rows='5' cols='90' id='text_area$id'>$example_text</textarea>
			</td>";
	return $cell;
}

function get_edit_loop(){
	$loop = "var num_boxes = get_num_boxes()
	for(var i=1;i<=num_boxes;i++){
		var cell = document.getElementById('cell' + i)
		var schedule = cell.innerHTML
		schedule = schedule.replace(/<br\s*\/?>/mg,'\n') //converts <br> to newline
		cell.innerHTML =" . json_encode(get_table_spanning_cell('i', 'Lunch Schedule')) .
	"}";
	return $loop;

}



?>