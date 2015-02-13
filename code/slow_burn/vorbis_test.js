
function vorbis_test(){
	//returns true if browser can play ogg vorbis
	var a = document.createElement('audio');
	return !!(a.canPlayType && a.canPlayType('audio/ogg; codecs="vorbis"').replace(/no/, ''));
}



document.write(vorbis_test())