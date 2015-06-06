<?php

//******config to run on localhost
define("BASE_URL","/Websites/allen_garvey_2/");
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/Websites/allen_garvey_2/");

//******config to run on namecheap
// define("BASE_URL","http://allengarvey.com/");
// define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/");

define("IMAGE_URL", BASE_URL.'images/');
define("CODE_URL", BASE_URL.'code/');
define("VIDEO_URL", BASE_URL.'video/');
define("ARTWORK_URL", BASE_URL.'artwork/');
define("MUSIC_URL", BASE_URL.'music/');

define("ARTWORK_IMAGE_URL", IMAGE_URL.'artwork/');
define("ARTWORK_IMAGE_THUMBNAIL_URL", IMAGE_URL.'artwork/thumbnails/');

define("ARTWORK_DETAIL_URL", ARTWORK_URL.'index.php?art='); //for local development
//define("ARTWORK_DETAIL_URL", ARTWORK_URL.'art/'); //for web pretty url