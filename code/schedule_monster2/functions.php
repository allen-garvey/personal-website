<?php

function get_min(){
	return 1;
}
function get_days_max(){
    return 11;
}
function get_periods_max(){
    return 24;
}
function get_days_default(){
    return 5;
}
function get_periods_default(){
    return 12;
}

function is_days_valid($value){
	if(is_int($value) && $value >= get_min() && $value <= get_days_max()){
		return true;
	}
	else{
		return false;
	}	
}

function is_periods_valid($value){
	if(is_int($value) && $value >= get_min() && $value <= get_periods_max()){
		return true;
	}
	else{
		return false;
	}	
}

function generate_schedule($days, $periods){
	return create_table($days, $periods);
}

function create_table($days, $periods){
	$cell = 1;
	$default_times = array('8:45-9:00', '9:10-9:40', '9:40-10:10', '10:10-10:50', '10:55-11:30', '11:45-12:20', '12:25-12:55', '1:00-1:30', '1:30-2:10', '2:10-2:50', '2:50-3:20', '3:20-3:45');
	$week = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

	$table = '<table>';
	
	for($i=0;$i<$periods+1;$i++){
		$row = '<tr>';
		for($j=0;$j<$days+1;$j++){
			//creates time and days header
			if($i === 0){
				if($j===0){
					$days_text = 'Time';
				}
				elseif($days === 5){
					$days_text = $week[$j];
				}
				elseif($days === 7){
					$days_text = $week[$j - 1];
				}
				else{
					$days_text = 'Day ' . $j;
				}

				$row = $row . get_table_header(((string) $cell), $days_text);

			}

			elseif($j===0){
				if($periods === get_periods_default()){
					$time_text = $default_times[$i-1];
				}
				else{
					$time_text = 'Period ' . $i; 
				}

				$row = $row . get_time_cell(((string) $cell), $time_text);
			}
			else{
				$row = $row . get_single_cell(((string) $cell));
			}
			$cell++;
		}
		$row = $row . '</tr>';
		$table = $table . $row;
	}
	$table = $table . '</table>';
	return $table;
}

function get_time_cell($id, $example_text=Null){
	if($example_text === Null){
		$example_text = "Example Text";
	}
	$cell = "<td id='cell$id' class='time_cell'>
				<textarea rows='5' cols='15' id='text_area$id'>$example_text</textarea>
			</td>";
	return $cell;
}

function get_table_header($id, $example_text=Null){
	if($example_text === Null){
		$example_text = "Example Text";
	}
	$cell = "<th id='cell$id'>
				<textarea rows='2' cols='15' id='text_area$id'>$example_text</textarea>
			</th>";
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


?>