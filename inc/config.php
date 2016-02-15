<?php

define("ENVIRONMENT_LOCAL", 0);
define("ENVIRONMENT_PRODUCTION", 1);
define('ROOT_PATH', dirname(__FILE__, 2).'/');
define('INC_PATH', ROOT_PATH.'inc/');
require_once(INC_PATH.'current_environment.php');

if(ENVIRONMENT_CURRENT === ENVIRONMENT_PRODUCTION){
	define("BASE_URL","http://allengarvey.com/");
}
else{
	//******config to run on localhost
	define("BASE_URL","http://localhost/Websites/allen_garvey_2/public_html/");
}
define("SCRIPTS_URL", BASE_URL.'scripts/');
define("IMAGE_PATH", ROOT_PATH.'public_html/images/');
define("IMAGE_URL", BASE_URL.'images/');
define("CODE_URL", BASE_URL.'code/');
define("VIDEO_URL", BASE_URL.'video/');
define("ARTWORK_URL", BASE_URL.'artwork/');
define("MUSIC_URL", BASE_URL.'music/');

define("ARTWORK_IMAGE_URL", IMAGE_URL.'artwork/');
define("ARTWORK_IMAGE_THUMBNAIL_URL", IMAGE_URL.'artwork/thumbnails/');

if(ENVIRONMENT_CURRENT === ENVIRONMENT_PRODUCTION){
	define("ARTWORK_DETAIL_URL", ARTWORK_URL.'art/'); //for web pretty url
}
else{
	//*******local development
	define("ARTWORK_DETAIL_URL", ARTWORK_URL.'index.php?art=');
}