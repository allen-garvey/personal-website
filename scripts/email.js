function email_scrambler(){
	var email_scrambler = this;
	this.get_email = function(){
		var at = '@';
		var end = 'allengarvey';
		var beginning = 'allen';
		var tld = '.com';
		var garbage = 'some stuff to confuse spiders';
		return beginning +  at + end + tld;
	}

	this.get_email_link = function(){
		var email = email_scrambler.get_email();
		return "<a href='mailto:" + email + "'>" + email + "</a>";
	}
}