function compare_arrays(array1, array2){
	//WARNING!
	//this function only compares primitive types - do not use if array contains 
	//arrays or objects or if array is empty
	var length1 = array1.length
	var length2 = array2.length
	if(length1===0 || length2 ===0 || length1 !== length2){
		return false
	}

	for(var i=0;i<length1;i++){
		if(array1[i] !== array2[i]){
			return false
		}
	}
	return true
}

function get_Solution(mastermind, solution_length){
	solution_length = solution_length
	solution = []
	for(var i=0;solution.length<solution_length;i++){
		solution[i] = mastermind.COLORS[Math.floor(Math.random() * (mastermind.COLORS.length))]
	}

	return solution
}

function answer_check(mastermind){
	var answer = []
	var tile_start = mastermind.tiles - mastermind.TILES_PER_ROUND + 1
	for(var i=0;i<mastermind.TILES_PER_ROUND;i++){
		var tile = document.getElementById("tile"+(tile_start + i))
		answer[i] = tile.colorName
	}
	if(compare_arrays(answer, mastermind.SOLUTION)){
		win(mastermind)
	}
	else{
		set_feedback_tiles_value(mastermind, answer)
		play_sfx(mastermind, mastermind.colors_matched)
		create_tiles(mastermind)
	}
}

function win(mastermind){
	play_sfx(mastermind, -2)
	set_feedback_tiles_value(mastermind, mastermind.SOLUTION)
	deselect_old_tiles()
	var heading_div = document.getElementById("heading_div")
	
	if(mastermind.guesses === 1){
		heading_div.innerHTML = "You Guessed It In 1 Try!<br>You Lucky SOB.<br>"
	}
	else{
		heading_div.innerHTML = "You Guessed It In " + mastermind.guesses + " Tries!<br>"
		var table1 = document.getElementById("main_table")
		for(var i = table1.rows.length - 2; i > -1; i--){
    		table1.deleteRow(i);
		}
	}

	submit_button = document.getElementById("submit_button")
	submit_button.style.lineHeight = "190%"
	submit_button.innerHTML = "Next<br>Level"
	submit_button.onclick = function(){
		play_sfx(mastermind, -1)
		reset_everything(mastermind.TILES_PER_ROUND + 1)
	}	
}

function reset_everything(new_tiles_per_round){
	var to_reset = ["main_table", "submit_table", "heading_div"]
	for (var i = to_reset.length - 1; i >= 0; i--) {
		var element = document.getElementById(to_reset[i])
		element.parentNode.removeChild(element)

	};
	
	main(new_tiles_per_round)
}

function deselect_old_tiles(){
	var tile_start = mastermind.tiles - mastermind.TILES_PER_ROUND + 1
	for(var i=0;i<mastermind.TILES_PER_ROUND;i++){
		var tile = document.getElementById("tile"+(tile_start + i))
		tile.className = "deselected_tile"
		tile.onclick = ""	
	}
}

function create_color_tiles(mastermind, row){
	if(mastermind.tiles > 0){
		deselect_old_tiles()
	}
	for(var i=0;i<mastermind.TILES_PER_ROUND;i++){
		mastermind.tiles += 1
		var color_tile = document.createElement('div')
		color_tile.id = "tile" + mastermind.tiles
		color_tile.className = "tile"
		color_tile.colorName = mastermind.COLORS[0]
		color_tile.style.backgroundColor = mastermind.COLORS_HEX[0]
		color_tile.current_index = 0
		
		color_tile.onclick = function(){
			
			if(this.current_index === mastermind.COLORS.length-1){
				this.style.backgroundColor = mastermind.COLORS_HEX[0]
				this.colorName = mastermind.COLORS[0]
				this.current_index = 0
			}
			else{
				this.current_index++
				this.style.backgroundColor = mastermind.COLORS_HEX[this.current_index] 
				this.colorName = mastermind.COLORS[this.current_index]
				
			}
		}

		var td = document.createElement('td')
		td.appendChild(color_tile)
		row.appendChild(td)	
	}
}

function create_tiles(mastermind){
	var row1 = document.createElement('tr')

	create_color_tiles(mastermind, row1)
	create_feedback_tiles(mastermind, "colors_tile", row1)
	create_feedback_tiles(mastermind, "position_tile", row1)

	var table1 = document.getElementById("main_table")
	table1.appendChild(row1)

	window.scrollTo(0,document.body.scrollHeight)
}

function create_feedback_tiles(mastermind, type, row){
	var feedback_tile = document.createElement('div')
	feedback_tile.className = "feedback_tile"
	feedback_tile.id = type + (mastermind.guesses + 1)
	feedback_tile.innerHTML = 0
	var td = document.createElement('td')
	td.appendChild(feedback_tile)
	row.appendChild(td)
}

function set_feedback_tiles_value(mastermind, answer){
	var colors_tile = document.getElementById("colors_tile" + mastermind.guesses)
	var position_tile = document.getElementById("position_tile" + mastermind.guesses)
	var solution_copy = mastermind.SOLUTION.slice(0)
	var colors = 0
	var position = 0

	for(var i = 0; i < answer.length; i++){
		var tile = answer[i]
		if(tile===mastermind.SOLUTION[i]){
			position++
		}
		var index = solution_copy.indexOf(tile)
		if(index !== -1){
			colors++
			solution_copy.splice(index, 1)
		}
	}
	colors_tile.innerHTML = colors
	position_tile.innerHTML = position
	mastermind.colors_matched = colors
}

function create_submit_button(mastermind, submit_table){
	var row2 = document.createElement('tr')
	row2.className = 'submit'
	row2.id = "submit_row"
	var td = document.createElement('td')
	td.className = 'submit'
	var submit_button = document.createElement('div')
	submit_button.id = 'submit_button'
	submit_button.innerHTML = "Submit"
	submit_button.onclick = function(){
		mastermind.guesses += 1
		answer_check(mastermind)
	}
	td.appendChild(submit_button)

	for(var i=0;i<3;i++){
		var td2 = document.createElement('td')
		td2.className = 'spacer_cell'
		row2.appendChild(td2)
	}
	row2.appendChild(td)
	
	if(window.jukebox.can_play){
		var td3 = document.createElement('td')
		td3.className = 'submit'
		var sound_button = document.createElement('div')
		sound_button.id = 'sound_button'
		sound_button.style.lineHeight = "190%"
		sound_button.innerHTML = "Sound<br>Off"
		sound_button.onclick = function(){
			if(window.jukebox.can_play && window.jukebox.is_sound_on){
				window.jukebox.bg_music.pause()
				window.jukebox.bg_music.currentTime = 0
				window.jukebox.is_sound_on = false
				this.innerHTML = "Sound<br>On"
			}
			else if(window.jukebox.can_play && !window.jukebox.is_sound_on){
				window.jukebox.bg_music.play()
				window.jukebox.is_sound_on = true
				this.innerHTML = "Sound<br>Off"
			}
		}
	
		td3.appendChild(sound_button)
		row2.appendChild(td3)
	}

	submit_table.appendChild(row2)

	var bottom_row = document.createElement('tr')
	bottom_row.className = 'submit'
	bottom_row.id = "submit_row"
	var td = document.createElement('td')
	td.className = 'submit'
	var empty = document.createElement('td')
	empty.className = 'spacer_cell'
	bottom_row.appendChild(empty)
	submit_table.appendChild(bottom_row)
}

function print_row(to_be_printed){
	//for debugging
	var table1 = document.getElementById("main_table")
	var row = document.createElement("tr")
	var td = document.createElement("td")
	td.className = "spacer_cell"
	td.innerHTML = to_be_printed
	row.appendChild(td)
	table.appendChild(row)
}

function main(TILES_PER_ROUND){
	mastermind = new Object()
	mastermind.tiles = 0
	mastermind.TILES_PER_ROUND = TILES_PER_ROUND
	mastermind.COLORS = ["red", "blue", "yellow", "green", "purple", "orange"]
	mastermind.COLORS_HEX = ["red", "blue", "yellow", "green", "purple",  "ff8700"]
	mastermind.SOLUTION = get_Solution(mastermind, mastermind.TILES_PER_ROUND)
	mastermind.guesses = 0

	var table = document.createElement('table')
	table.id = "main_table"

	var heading_div = document.createElement("div")
	heading_div.className = "center2"
	heading_div.id = "heading_div"
	if(mastermind.TILES_PER_ROUND == 1){
		heading_div.innerHTML = "Click The Red Square To Begin"
	}
	else{
		heading_div.innerHTML = "Click Any Color To Begin"
	}
	
	document.body.appendChild(heading_div)

	var center_div = document.createElement("div")
	center_div.className = "center2"
	center_div.id = "center2"
	center_div.appendChild(table)
	document.body.appendChild(center_div)

	create_tiles(mastermind)

	var submit_table = document.createElement('table')
	submit_table.id = "submit_table"
	create_submit_button(mastermind, submit_table)

	center_div.appendChild(submit_table)
}
function vorbis_test(){
	//returns true if browser can play ogg vorbis
	var a = document.createElement('audio');
	return !!(a.canPlayType && a.canPlayType('audio/ogg; codecs="vorbis"').replace(/no/, ''));
}

function aac_test(){
	//returns true if browser can play aac
	var a = document.createElement('audio');
	return !!(a.canPlayType && a.canPlayType('audio/mp4; codecs="mp4a.40.2"').replace(/no/, ''));
}
function initialize_jukebox(){
	window.jukebox = new Object()
	window.jukebox.id = "jukebox"
	window.jukebox.can_play = true
	if(vorbis_test()){
		window.jukebox.extension = ".ogg"

	}
	else if(aac_test()){
		window.jukebox.extension = ".m4a"
	}
	else{
		window.jukebox.can_play = false
	}
	window.jukebox.sound_files = ["an_empty_world", "mastermind_sfx1", "mastermind_sfx2", "mastermind_sfx3", 
	"mastermind_sfx4", "mastermind_sfx5", "mastermind_sfx6"]
	if(window.jukebox.can_play){
		window.jukebox.bg_music = new Audio(window.jukebox.sound_files[0] + window.jukebox.extension)
		
		//bg_music.loop = true
		//my attempt at gapless looping
		window.jukebox.bg_music.addEventListener('timeupdate', function(){
				var buffer = .52
				if(this.currentTime > this.duration - buffer){
					this.currentTime = 0
					this.play()
				}}, false);
		window.jukebox.is_sound_on = true
		window.jukebox.bg_music.play()

	}
}
function play_sfx(mastermind, colors_matched){
	if(!window.jukebox.can_play || !window.jukebox.is_sound_on){
		return
	}
	var total = mastermind.TILES_PER_ROUND
	if(colors_matched === -1){
		var sfx = new Audio(window.jukebox.sound_files[5] + window.jukebox.extension)
		sfx.play()
	}
	else if(colors_matched === -2){
		var sfx = new Audio(window.jukebox.sound_files[6] + window.jukebox.extension)
		sfx.play()
	}
	else if(colors_matched === 0){
		var sfx = new Audio(window.jukebox.sound_files[1] + window.jukebox.extension)
		sfx.play()
	}
	else if(colors_matched >= total * .75){
		var sfx = new Audio(window.jukebox.sound_files[4] + window.jukebox.extension)
		sfx.play()
	}
	else if(colors_matched >= total * .5){
		var sfx = new Audio(window.jukebox.sound_files[3] + window.jukebox.extension)
		sfx.play()
	}
	else{
		var sfx = new Audio(window.jukebox.sound_files[2] + window.jukebox.extension)
		sfx.play()
	}
}

initialize_jukebox()
main(1)



