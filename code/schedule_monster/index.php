<?php
include 'functions.php';
?>

<html>
<head><title>Schedule Monster</title>

<style>

table,th,td{
	border:1px solid black;
	font-family: 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif;

}
td{
	padding: 5px;
	vertical-align: top;
}
table{
	min-width: 100%;
	margin:10px;

}

#center{
	margin: 0 auto;
	width:900px;
}
.header{
	margin:10px;
}
.footer{
	margin:10px;
	font-size: 50%;
}

textarea {
     -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
     -moz-box-sizing: border-box;    /* Firefox, other Gecko */
     box-sizing: border-box;         /* Opera/IE 8+ */
     width: 100%;
}

textarea, input{
	font-family: 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif;
}


body {
	font-family: Helvetica, Arial, sans-serif;
	font-size: 30px;
}
h1{
	font-family: Helvetica, Arial, sans-serif;
}
button{
	width: 150px;
	height: 50px;
	border-radius:10px;
	background-color: #ebebeb;
	border-color: black;
	font-size: 25px;
	font-family: Helvetica, Arial, sans-serif;
}
button:hover{
	background-color: #97eaff;
}

</style>
<script>
function get_num_boxes(){
	return 37
}

function get_current_date(){
	var today = new Date()
	var dd = today.getDate()
	var mm = today.getMonth()+1 //January is 0!
	var yyyy = today.getFullYear()

	if(dd<10) {
	    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	} 

	today = mm+'/'+dd+'/'+yyyy

	return today
}

function get_time_cell(id){
	if(example_text === Null){
		example_text = "Example Text";
	}
	cell = "<td id='cell" + id + "'>" +
				"<textarea rows='5' cols='15' id='text_area" + id + "'>" + example_text + "</textarea></td>";
	return cell;

}

function create(){
	document.getElementById('edit_button').style.visibility = 'visible'
	document.getElementById('create_button').style.visibility = 'hidden'
	document.getElementById('headline').style.visibility = 'hidden'
	document.getElementById('print_button').style.visibility = 'visible'
	
	var num_boxes = get_num_boxes()
	for(var i=1;i<=num_boxes;i++){
		var schedule = document.getElementById('text_area' + i).value
		schedule = schedule.replace(/\n/g, '<br>') //converts newlines
		schedule = schedule.replace(/\s/g, '&nbsp;') //converts spaces
		document.getElementById('cell'  + i).innerHTML = schedule
	}

	var text_fields = ["header_right", "header_left", "footer_right", "footer_left"]
	for(var i=0;i<text_fields.length;i++){
		var text_field_contents = document.getElementById(text_fields[i] + "_field").value
		text_field_contents = text_field_contents.replace(/\n/g, '<br>') //converts newlines
		text_field_contents = text_field_contents.replace(/\s/g, '&nbsp;') //converts spaces
		document.getElementById(text_fields[i]).innerHTML = text_field_contents
	}
}

function edit(){
	document.getElementById('edit_button').style.visibility = 'hidden'
	document.getElementById('print_button').style.visibility = 'hidden'
	document.getElementById('create_button').style.visibility = 'visible'
	document.getElementById('headline').style.visibility = 'visible'
	
	var num_boxes = get_num_boxes()
	for(var i=1;i<=num_boxes;i++){
		var cell = document.getElementById('cell' + i)
		var schedule = cell.innerHTML
		schedule = schedule.replace(/<br\s*\/?>/mg,"\n") //converts <br> to newline
		cell.innerHTML = "<td id='cell" + i + "'>" + "<textarea rows='5' cols='15' id='text_area" + i + "'>" + schedule + "</textarea></td>";
	}

	var text_fields = ["header_right", "header_left", "footer_right", "footer_left"]
	for(var i=0;i<text_fields.length;i++){
		var text_field_contents = document.getElementById(text_fields[i]).innerHTML
		
		text_field_contents = text_field_contents.replace(/<br\s*\/?>/mg,"\n") //converts <br> to newline
		
		document.getElementById(text_fields[i]).innerHTML = "<input type='text' size='30' value='" + text_field_contents +"'id='"+ text_fields[i] + "_field'>" 
	}
}
function print_preview(){
	document.getElementById('edit_button').style.visibility = 'hidden'
	document.getElementById('print_button').style.visibility = 'hidden'
	//copies webpage into new window - turned out not to be needed
	/*
	var yourDOCTYPE = "<!DOCTYPE html..."; // your doctype declaration
	var printPreview = window.open('about:blank', 'print_preview');
	var printDocument = printPreview.document;
	printDocument.open();
	printDocument.write(yourDOCTYPE + "<html>" + document.documentElement.innerHTML + "</html>");
	printDocument.close();
	*/
	window.print()
	document.getElementById('edit_button').style.visibility = 'visible'
	document.getElementById('print_button').style.visibility = 'visible'
}

</script>
</head>
<body>
<div id='center'>
	<h1 style='text-align:center' id='headline'>Schedule Monster</h1><br>
	<div id='header' class='header'>
		<div id='header_left' style='float:left'>
			<input type="text" size="30" value="Susan Garvey - ESL" id="header_left_field">
		</div>
		<div id='header_right' style='float:right; text-align:right;'>
			<input type="text" size="30" value="Springdale School 2013-2014" id="header_right_field">
		</div>
	</div>
	<br>
	<table>
	  <tr>
	    <th>Time</th>
	    <th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('9', '8:45-9:00'); ?>
	    <?php echo get_table_spanning_cell('1', 'Hall Duty'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('10', '9:10-9:40'); ?>
		<?php echo get_table_spanning_cell('2', 'First Thing'); ?>
	  </tr>
	  <tr>
	  <tr>
	    <?php echo get_time_cell('11', '9:40-10:10'); ?>
		<?php echo get_table_spanning_cell('3', 'Unassigned Time'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('15', '10:10-10:50'); ?>
		<?php echo get_table_spanning_cell('36', 'Academic Enrichment'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('12', '10:55-11:30'); ?>
	    <?php echo get_single_cell('14'); ?>
		<?php echo get_single_cell('5'); ?>
		<?php echo get_single_cell('6'); ?>
		<?php echo get_single_cell('7'); ?>
		<?php echo get_single_cell('8'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('37', '11:45-12:20'); ?>
	    <?php echo get_single_cell('16'); ?>
		<?php echo get_single_cell('17'); ?>
		<?php echo get_single_cell('18'); ?>
		<?php echo get_single_cell('19'); ?>
		<?php echo get_single_cell('20'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('13', '12:25-12:55'); ?>
		<?php echo get_table_spanning_cell('4', 'Lunch'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('21', '1:00-1:30'); ?>
		<?php echo get_table_spanning_cell('22', Null, '3'); ?>
		<?php echo get_table_spanning_cell('23', Null, '2'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('24', '1:30-2:10'); ?>
	    <?php echo get_single_cell('25'); ?>
		<?php echo get_single_cell('26'); ?>
		<?php echo get_single_cell('27'); ?>
		<?php echo get_single_cell('28'); ?>
		<?php echo get_single_cell('29'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('30', '2:10-2:50'); ?>
		<?php echo get_table_spanning_cell('31'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('32', '2:50-3:20'); ?>
		<?php echo get_table_spanning_cell('33'); ?>
	  </tr>
	  <tr>
	    <?php echo get_time_cell('34', '3:20-3:45'); ?>
		<?php echo get_table_spanning_cell('35', 'Hall Duty'); ?>
	  </tr>
	</table>
	<div id='footer' class='footer'>
		<div id='footer_left' style='float:left'>
			<input type="text" size="30" value="" id="footer_left_field">
		</div>
		<div id='footer_right' style='float:right;text-align:right;'>
			<input type="text" size="30" value="*" id="footer_right_field">
		</div>
		
	</div>

 <br><br>
 	<button onclick='create()' id='create_button'>Create</button>
 	<button onclick='edit()' id='edit_button' style='visibility:hidden;'>Edit</button>
 	<button onclick='print_preview()' id='print_button' style='visibility:hidden;'>Print</button>

 </div>
 <script type="text/javascript">
 	var footer_right_field = document.getElementById('footer_right_field')
 	if(footer_right_field.value==="*"){
 		footer_right_field.value = get_current_date()
 	}
 </script>
 	
</body>
</html>