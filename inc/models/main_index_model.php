<?php

	function main_index_model(){
		$model = [];

		$model['main_text'] = "I'm a software developer, designer and musician. As far back as I can remember I've always been intensely curious, which leads me to never stop learning. I believe that if you do the work and put in the time for the things that you are most passionate about, good things will come to you.";

		$model['accomplishment_list'] = ["wrote and produced an opera based on <em>Brave New World</em>",
										"performed in over 50 countries on 4 continents",
										"climbed Mt. Pahia in Bora Bora on three separate occasions",
										"taught web development, web design and Android app development to high school and college students",
										"had artwork chosen for the <em>2015 Stacy M. Israel Art, Architecture + Design Student Exhibition</em> at Norwalk Community College"
										];

		return $model;
	}