<?php
include 'functions.php';

$days = null;
$periods = null;

if(isset($_GET['days']) && isset($_GET['periods'])){
    $days = $_REQUEST["days"];
    $periods = $_REQUEST["periods"];

    $days = @(int) $days;
    $periods = @(int) $periods;
}
if(is_days_valid($days) && is_periods_valid($periods)){
    $num_boxes = ($days + 1) * ($periods + 1);
    include('template_head.php');
    echo generate_schedule($days, $periods);
    include('template_foot.php');
}
else{
     $error_message = ($days || $periods) ? "You have entered either an invalid number of days or invalid number of periods" : '';

?>

<!DOCTYPE html>
<html>
<head><title>Schedule Monster 2</title>
<style type="text/css">
body {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 30px;
}
#center{
    margin: 0 auto;
    max-width:900px;
    text-align: center;
}
.selection_div{
  display: inline-block;
  margin-right: 25px;
  margin-bottom: 20px;
  margin-top: 25px;
}
input{
    font-size: 25px;
    font-family: Helvetica, Arial, sans-serif;
    margin-left: 10px;
    padding: 5px;
    text-align: center;
}
input[type=number].valid{
    background-color: #aaffaa;
    border-color: green;
}

input[type=number].invalid{
    background-color: pink;
    border-color: red;
}
button{
    width: 150px;
    height: 70px;
    border-radius:10px;
    background-color: #ebebeb;
    border-color: black;
    font-size: 25px;
    font-family: Helvetica, Arial, sans-serif;
}

button:hover{
    background-color: #97eaff;
}
#result{
    margin: 20px;
    height: 30px;
    font-size: 80%;
}

</style>
</head>

<script type="text/javascript">
function get_min(){
    return <?php echo get_min() ?>
}
function get_days_max(){
    return <?php echo get_days_max() ?>
}
function get_periods_max(){
    return <?php echo get_periods_max() ?>
}
function get_days_default(){
    return <?php echo get_days_default() ?>
}
function get_periods_default(){
    return <?php echo get_periods_default() ?>
}
function generate(){
    var days_input = document.getElementById('days')
    var periods_input = document.getElementById('periods')
    var results_div = document.getElementById("result")
	
    var days = days_input.value
	var periods = periods_input.value

    is_days_valid = true

    if(!is_valid(days, get_min(), get_days_max())){
        results_div.innerHTML = "Please enter a number between " + get_min() + " and " + get_days_max() + " for days"
        is_days_valid = false
    }
    if(!is_valid(periods, get_min(), get_periods_max())){
        if(!is_days_valid){
            results_div.innerHTML = results_div.innerHTML + "<br>Please enter a number between " + get_min() + " and " + get_periods_max() + " for periods<br>"
        }
        else{
            results_div.innerHTML = "Please enter a number between " + get_min() + " and " + get_periods_max() + " for periods<br>"
            
        }
        
    }
    else{
        if(is_days_valid){
            document.getElementById('generator_form').submit();
        }  
    }
}

function display_validation(sender){
    var MIN = get_min()
    if(sender.id === 'periods'){
        var MAX = get_periods_max()
    }
    else{
        MAX = get_days_max()
    }
    
    if(!is_valid(sender.value, MIN, MAX)){
        sender.className = 'invalid'
    }
    else{
        sender.className = 'valid'
    }
}


function is_valid(input_value, lower_limit, upper_limit){
    if(input_value === '' || input_value < lower_limit || input_value > upper_limit){
        return false
    }
    else{
        return true
    }
    
}

window.onload = function(){
    document.getElementById('days').addEventListener('change', function(){display_validation(this)}, false)
    document.getElementById('periods').addEventListener('change', function(){display_validation(this)}, false)

}

</script>

<body>


<div id='center'>
<h1>Schedule Monster 2</h1>
<form method="GET" id="generator_form" action="index.php">
<div id='day_div' class='selection_div'>
    Days in schedule
    <input type="number" min=<?php echo "'" . get_min() . "'" ?> max=<?php echo "'" . get_days_max() . "'" ?> step="1" value=<?php echo "'" . get_days_default() . "'" ?> id="days" name="days" onkeyup="display_validation(this)" />
</div>
    Periods per day
    <div id='period_div' class='selection_div'><input type="number" min=<?php echo "'" . get_min() . "'" ?> max=<?php echo "'" . get_periods_max() . "'" ?> step="1" value=<?php echo "'" . get_periods_default() . "'" ?> id="periods" name="periods" onkeyup="display_validation(this)" />
</div>

<br>
<div id='result'><?php echo $error_message ?></div><br>
<button onclick='generate()' id='generate_button'>Create Schedule</button>
</form>
</div>


</body>
</html>
<?php } //end of else statement from start of file ?>