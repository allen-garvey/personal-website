<!DOCTYPE html><html>
<head><title>Schedule Monster 2</title>

<style>
a{
	text-decoration: none;
	color: black;
}
a:hover{
	color: silver;
}
a:active{
	color: #97eaff;
}
table,th,td{
	font-family: 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif;
}

th,td{
	border:1px solid black;
}
td{
	padding: 5px;
	vertical-align: top;
}
td,th{
	font-size: 16px;
}
table{

	min-width: 100%;
	margin:10px;
	/*border-collapse: collapse;*/
}

#center{
	/*margin: 0 auto;*/
	/*max-width:1100px;*/
}
.header{
	margin:10px;
}
.footer{
	margin:10px;
	font-size: 50%;
}
.time_cell{
	width: 110px;
}
th{
	width: 110px;
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
button:active{
	background-color: SlateGray;
}

</style>
<script>
function get_num_boxes(){
	return <?php echo $num_boxes ?>
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

function create(){
	document.getElementById('edit_button').style.visibility = 'visible'
	document.getElementById('create_button').style.visibility = 'hidden'
	document.getElementById('headline').innerHTML = ''
	document.getElementById('print_button').style.visibility = 'visible'
	
	var num_boxes = get_num_boxes()
	for(var i=1;i<=num_boxes;i++){
		var schedule = document.getElementById('text_area' + i).value
		schedule = schedule.replace(/\n/g, '<br>') //converts newlines
		schedule = schedule.replace(/\s/g, '&nbsp;') //converts spaces
		document.getElementById('cell'  + i).innerHTML = schedule
	}

	var text_fields = ['header_right', 'header_left', 'footer_right', 'footer_left']
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
	document.getElementById('headline').innerHTML = 'Schedule Monster 2<br>'
	
	var num_boxes = get_num_boxes()
	for(var i=1;i<=num_boxes;i++){
		var cell = document.getElementById('cell' + i)
		var schedule = cell.innerHTML
		schedule = schedule.replace(/<br\s*\/?>/mg,"\n") //converts <br> to newline
		cell.innerHTML = "<textarea rows='5' cols='15' id='text_area" + i + "'>" + schedule + "</textarea>";
	}

	var text_fields = ['header_right', 'header_left', 'footer_right', 'footer_left']
	for(var i=0;i<text_fields.length;i++){
		var text_field_contents = document.getElementById(text_fields[i]).innerHTML
		
		text_field_contents = text_field_contents.replace(/<br\s*\/?>/mg,"\n") //converts <br> to newline
		
		document.getElementById(text_fields[i]).innerHTML = "<input type='text' size='30' value='" + text_field_contents +"'id='"+ text_fields[i] + "_field'>" 
	}
}
function print_preview(){
	document.getElementById('edit_button').style.visibility = 'hidden'
	document.getElementById('print_button').style.visibility = 'hidden'
	window.print()
	document.getElementById('edit_button').style.visibility = 'visible'
	document.getElementById('print_button').style.visibility = 'visible'
}

</script>
</head>
<body>
<div id='center'>
	<h1 style='text-align:center' id='headline'><a href='index.php'>Schedule Monster 2</a><br></h1>
	<div id='header' class='header'>
		<div id='header_left' style='float:left'>
			<input type='text' size='30' value='Name' id='header_left_field'>
		</div>
		<div id='header_right' style='float:right; text-align:right;'>
			<?php $current_year = date('Y'); ?>
			<input type='text' size='30' value='School Schedule <?php echo $current_year; ?>-<?php echo $current_year + 1; ?>' id='header_right_field'>
		</div>
	</div>
	<br>