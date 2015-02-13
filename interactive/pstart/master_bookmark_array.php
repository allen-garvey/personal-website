<?php 
function master_bookmark_array(){

 
	$master_bookmark_array = array();

	$m_contents_list = array();
	$m_contents_list[] = array('description' => 'TD Bank', 'url' => 'https://onlinebanking.tdbank.com');
	$m_contents_list[] = array('description' => 'Bank of America', 'url' => 'http://www.bankofamerica.com');
	$m_contents_list[] = array('description' => 'Chase', 'url' => 'http://www.chase.com/amazon');
	$m_contents_list[] = array('description' => '1FBUSA', 'url' => 'http://1fbusa.com');
	$m_contents_list[] = array('description' => 'Vanguard', 'url' => 'https://personal.vanguard.com/us/home?fromPage=portal');
	$master_bookmark_array['m_contents_list'] = $m_contents_list;

	$t_contents_list = array();
	$t_contents_list[] = array('description' => 'Duck Duck Go', 'url' => 'https://duckduckgo.com/?q=what+is+my+ip');
	$t_contents_list[] = array('description' => 'Kat', 'url' => 'http://www.kat.ph');
	$t_contents_list[] = array('description' => 'The Pirate Bay', 'url' => 'http://www.thepiratebay.se');
	$t_contents_list[] = array('description' => 'Bitsnoop', 'url' => 'http://www.bitsnoop.com/');
	$master_bookmark_array['t_contents_list'] = $t_contents_list;

	$l_contents_list = array();
	$l_contents_list[] = array('description' => 'Localhost', 'url' => 'http://localhost');
	$l_contents_list[] = array('description' => 'Tomcat', 'url' => 'http://localhost:8080');
	$l_contents_list[] = array('description' => 'Internet List', 'url' => 'http://localhost/internet_list');
	$l_contents_list[] = array('description' => 'Movie List', 'url' => 'http://localhost/movie_list');
	$l_contents_list[] = array('description' => 'Allen Garvey', 'url' => 'http://www.allengarvey.com');
	$l_contents_list[] = array('description' => 'Bitter Polar Bear', 'url' => 'http://www.bitterpolarbear.com');
	$l_contents_list[] = array('description' => 'Strange Scenery', 'url' => 'http://www.strangescenery.com');
	$l_contents_list[] = array('description' => 'Dreamhost', 'url' => 'http://www.dreamhost.com');
	$master_bookmark_array['l_contents_list'] = $l_contents_list;

	$l_contents_list_mobile = array();
	$l_contents_list_mobile[] = array('description' => 'Allen Garvey', 'url' => 'http://www.allengarvey.com');
	$l_contents_list_mobile[] = array('description' => 'Bitter Polar Bear', 'url' => 'http://www.bitterpolarbear.com');
	$l_contents_list_mobile[] = array('description' => 'Strange Scenery', 'url' => 'http://www.strangescenery.com');
	$master_bookmark_array['l_contents_list_mobile'] = $l_contents_list_mobile;

	$x_contents_list = array();
	$x_contents_list[] = array('description' => 'Baseball Prospectus', 'url' => 'http://www.baseballprospectus.com');
	$x_contents_list[] = array('description' => 'MLB Trade Rumors', 'url' => 'http://www.mlbtraderumors.com');
	$x_contents_list[] = array('description' => 'Mac Rumors', 'url' => 'http://www.macrumors.com');
	$x_contents_list[] = array('description' => 'Gmail', 'url' => 'http://www.gmail.com');
	$x_contents_list[] = array('description' => 'Facebook', 'url' => 'http://www.facebook.com');
	$x_contents_list[] = array('description' => 'Hotmail', 'url' => 'https://www.hotmail.com/');
	$x_contents_list[] = array('description' => 'Apple Trailers', 'url' => 'http://trailers.apple.com');
	$x_contents_list[] = array('description' => 'XKCD', 'url' => 'http://www.xkcd.com');
	$x_contents_list[] = array('description' => 'Return of Kings', 'url' => 'http://www.returnofkings.com');
	$x_contents_list[] = array('description' => 'Tynan', 'url' => 'http://www.tynan.com');
	$x_contents_list[] = array('description' => 'NY Times Magazine', 'url' => 'http://www.nytimes.com/magazine');
	$master_bookmark_array['x_contents_list'] = $x_contents_list;

	$x_contents_list_mobile = array();
	$x_contents_list_mobile[] = array('description' => 'Baseball Prospectus', 'url' => 'http://www.baseballprospectus.com');
	$x_contents_list_mobile[] = array('description' => 'MLB Trade Rumors', 'url' => 'http://www.mlbtraderumors.com');
	$x_contents_list_mobile[] = array('description' => 'Mac Rumors', 'url' => 'http://www.macrumors.com');
	$x_contents_list_mobile[] = array('description' => 'XKCD', 'url' => 'http://www.xkcd.com');
	$x_contents_list_mobile[] = array('description' => 'Return of Kings', 'url' => 'http://www.returnofkings.com');
	$x_contents_list_mobile[] = array('description' => 'Tynan', 'url' => 'http://www.tynan.com');
	$x_contents_list_mobile[] = array('description' => 'NY Times Magazine', 'url' => 'http://www.nytimes.com/magazine');
	$master_bookmark_array['x_contents_list_mobile'] = $x_contents_list_mobile;

	$r_contents_list = array();
	$r_contents_list[] = array('description' => 'Greenwich', 'url' => 'http://www.greenwichlibrary.org');
	$r_contents_list[] = array('description' => 'Ferguson', 'url' => 'http://www.fergusonlibrary.org');
	$r_contents_list[] = array('description' => 'New Canaan', 'url' => 'http://newcanaanlibrary.org');
	$r_contents_list[] = array('description' => 'NYPL', 'url' => 'http://www.nypl.org');
	$r_contents_list[] = array('description' => 'Purchase', 'url' => 'http://www.suny.edu/puchase');
	$r_contents_list[] = array('description' => 'Lexicat', 'url' => 'http://libweb.hofstra.edu/search/t');
	$master_bookmark_array['r_contents_list'] = $r_contents_list;

	$c_contents_list = array();
	$c_contents_list[] = array('description' => 'Hacker News', 'url' => 'http://news.ycombinator.com');
	$c_contents_list[] = array('description' => 'The Daily WTF', 'url' => 'http://www.thedailywtf.com');
	$c_contents_list[] = array('description' => 'The Codist', 'url' => 'http://www.thecodist.com');
	$c_contents_list[] = array('description' => 'Coding Horror', 'url' => 'http://www.codinghorror.com');
	$c_contents_list[] = array('description' => 'Derek Sivers', 'url' => 'http://www.dereksivers.com');
	$c_contents_list[] = array('description' => 'Craigslist', 'url' => 'http://newyork.craigslist.org');
	$master_bookmark_array['c_contents_list'] = $c_contents_list;

	$e_contents_list = array();
	// $e_contents_list[] = array('description' => 'my.commnet', 'url' => 'http://my.commnet.edu');
	$e_contents_list[] = array('description' => 'Blackboard', 'url' => 'https://learn-cc.ct.edu/webapps/login/');
	$e_contents_list[] = array('description' => 'NCC', 'url' => 'http://www.ncc.commnet.edu/default.asp');
	$e_contents_list[] = array('description' => 'Amazon Cloud Reader', 'url' => 'http://read.amazon.com');
	$e_contents_list[] = array('description' => 'Pinterest', 'url' => 'https://www.pinterest.com');
	$e_contents_list[] = array('description' => 'Digication', 'url' => 'https://norwalk.digication.com/');
	$e_contents_list[] = array('description' => 'Coursera', 'url' => 'https://www.coursera.org');
	$e_contents_list[] = array('description' => 'edX', 'url' => 'https://www.edx.org');
	$e_contents_list[] = array('description' => 'Epicodus', 'url' => 'http://www.learnhowtoprogram.com/table-of-contents');
	$e_contents_list[] = array('description' => 'Code School', 'url' => 'https://www.codeschool.com');
	$e_contents_list[] = array('description' => 'Reason Tutorials', 'url' => 'http://www.propellerheads.se/substance/discovering-reason/index.cfm?fuseaction=get_article&article=part1');
	$e_contents_list[] = array('description' => 'Type Racer', 'url' => 'http://play.typeracer.com');
	$e_contents_list[] = array('description' => 'Typing Trainer', 'url' => 'http://www.keybr.com');
	$e_contents_list[] = array('description' => 'Dvorak Trainer', 'url' => 'http://www.powertyping.com');
	$master_bookmark_array['e_contents_list'] = $e_contents_list;

	$z_contents_list = array();
	$z_contents_list[] = array('description' => 'Propellerhead', 'url' => 'http://www.propellerheads.se');
	$z_contents_list[] = array('description' => 'Reason 101', 'url' => 'http://www.reason101.net');
	$z_contents_list[] = array('description' => 'TC Electronic', 'url' => 'http://www.tcelectronic.com');
	$z_contents_list[] = array('description' => 'Musicomics', 'url' => 'http://decidedlydusty.tumblr.com');
	$z_contents_list[] = array('description' => 'IGN PS4', 'url' => 'http://www.ign.com/ps4');
	$z_contents_list[] = array('description' => 'Mono', 'url' => 'https://www.monocreators.com');
	$z_contents_list[] = array('description' => 'Red Oxx', 'url' => 'http://www.redoxx.com');
	$master_bookmark_array['z_contents_list'] = $z_contents_list;
	
	return $master_bookmark_array;
}
?>