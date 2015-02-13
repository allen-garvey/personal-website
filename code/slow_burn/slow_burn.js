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





function create_playable_img(file_prefix, audio_file_extension){
		var playable_image = document.createElement('img')
		playable_image.src = file_prefix + '.jpg'
		playable_image.width = '200'
		playable_image.height = '200'
		playable_image.style.margin = '0px'
		playable_image.style.border = '3px solid transparent'
		var selected_opacity = '1.0'
		var unselected_opacity = '.2'
		playable_image.style.opacity = unselected_opacity
		
		var audio_file = new Audio(file_prefix + audio_file_extension)
		//audio_file.loop = true
		//my attempt at gapless looping
		audio_file.addEventListener('timeupdate', function(){
				var buffer = .42
				if(this.currentTime > this.duration - buffer){
					this.currentTime = 0
					this.play()
				}}, false);


		var clicked = 'false'

		playable_image.onmouseover = function(){
			playable_image.style.border = '3px solid magenta'
			
		}
		playable_image.onmouseout = function(){
			playable_image.style.border = '3px solid transparent'
		}
		playable_image.onclick = function(){
			if(clicked === 'false'){
				playable_image.style.opacity = selected_opacity
				
				audio_file.play()

				clicked = 'true'
			}
			else{
				playable_image.style.opacity = unselected_opacity
				
				audio_file.pause()
				//returns to beginning of audio file
				audio_file.currentTime = 0

				clicked = 'false'
			}
		}
		document.body.appendChild(playable_image)
	}

function create_multiple_playable_images(audio_file_extension){
	var instruments = ["drums1", "drums2", "bongos1", "bass1", "bass2", "wurlybass1", "rhodeschords1", "rhodeschords2","organ1", "guitarbass1", "guitarchords1", "guitarriff1", "wurlylead1", "wurlylead2"];

	
	document.write("<div align='center'>")
	document.write("Click an image to start")

	for(var i=0;i<instruments.length;i++){
		create_playable_img(instruments[i], audio_file_extension)	
	}
	document.write("</div>")
}







if(vorbis_test()){
	create_multiple_playable_images('.ogg')
}
else if(aac_test()){
	create_multiple_playable_images('.m4a')
}
else{
	document.write("Your browser does not support HTML5 Audio")
}






