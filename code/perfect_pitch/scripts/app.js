(function(){
	var app = angular.module('PerfectPitch', []);
	app.controller('GameController', function(){
		var gameCtlr = this;
		this.numTotal;
		this.numRight;
		this.showAnswer;
		this.numGuesses;
		this.answer;
		this.difficulty;
		//used for button states to display the correct classes
		this.button0;
		this.button1;
		this.button2;
		this.button3;
		this.button4;
		this.button5;
		this.button6;
		this.button7;
		this.button8;
		this.button9;
		this.button10;
		this.button11;
		
		this.showScore = function(){return gameCtlr.numRight + "/" + gameCtlr.numTotal;};

		this.playSoundfontNote = function(noteInt){
			var myAudio = new Audio('soundfont/acoustic_grand_piano-mp3/' + gameCtlr.noteIntToName(noteInt) + '.mp3');
			myAudio.play();
		};
		this.noteIntToName = function(noteInt){
			var noteNames = ['A', 'Bb', 'B', 'C', 'Db', 'D', 'Eb', 'E', 'F', 'Gb', 'G', 'Ab'];
			var name = noteNames[noteInt % 12];
			var octave = gameCtlr.getOctave(noteInt);
			return name + octave;
		}
		this.getOctave = function(noteInt){
			var octave = Math.floor(noteInt / 12);
			if(noteInt % 12 <= 2 ){return octave;}
			else {return octave + 1;}
		}
		this.randomInt = function(minNote,maxNote){
			var min = minNote || 0;
			var max = maxNote || 87;
    		return Math.floor(Math.random()*(max-min+1)+min);
		}

		this.playNote = function(){this.playSoundfontNote(this.answer);}

		this.guess = function(noteIntGuess){
			if(gameCtlr.showAnswer){return;}
			var guessedRight = false;

			if(noteIntGuess === gameCtlr.answer % 12){
				gameCtlr.showAnswer = true;
				guessedRight = true;
			}
			if(gameCtlr.numGuesses === 0){
				gameCtlr.numTotal++;
				if(guessedRight){
					gameCtlr.numRight++;
				}
			}
			gameCtlr['button'+noteIntGuess] = guessedRight;
			gameCtlr.numGuesses++;
		}
		this.getDifficulty = function(option){
			switch(option){
				case "Hard":
					return {name: "Hard", noteIntMin: 0, noteIntMax: 87, previous: "Medium", next:"Easy"};
				case "Easy":
					return {name: "Easy", noteIntMin: 39, noteIntMax: 51, previous: "Hard", next:"Medium"};
				default:
					return {name: "Medium", noteIntMin: 27, noteIntMax: 63, previous: "Easy", next:"Hard"};
			}
		}
		this.toggleDifficulty = function(direction){
			gameCtlr.difficulty = gameCtlr.getDifficulty(gameCtlr.difficulty[direction]);
			gameCtlr.newGame();
		}

		this.initRound = function(){
			for (var i = 0; i < 12; i++) {
				gameCtlr['button'+i] = 'clean';
			};
			gameCtlr.showAnswer = false;
			gameCtlr.numGuesses = 0;
			gameCtlr.answer = gameCtlr.randomInt(gameCtlr.difficulty.noteIntMin, gameCtlr.difficulty.noteIntMax);
			gameCtlr.playNote();
		}
		this.displayAnswer = function(){
			var noteNames = ['A', 'A#/Bb', 'B', 'C', 'C#/Db', 'D', 'D#/Eb','E', 'F', 'F#/Gb', 'G', 'G#/Ab'];
			return noteNames[gameCtlr.answer % 12];
		}
		this.newGame = function(){
			gameCtlr.numTotal = 0;
			gameCtlr.numRight = 0;
			gameCtlr.initRound();
		};
		this.initApp = function(){
			gameCtlr.difficulty = gameCtlr.getDifficulty('Medium');
			gameCtlr.newGame();
		};
		this.initApp();

	});

	
})();