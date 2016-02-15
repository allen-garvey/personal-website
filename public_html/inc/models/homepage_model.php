<?php

	function main_index_model(){
		$model = [];

		$model['main_text'] = "I'm a software developer, designer and musician. When you follow your passions like I have, you end up in some curious situations, like lugging an upright bass and amp across a university campus in a suit and tie, or programming Objective-C in the crew bar of a cruise ship at 3 o'clock in the afternoon. However, I believe if you're always creating, learning, and challenging yourself, the journey will be worth it.";

		$model['accomplishment_list'] = ["wrote and produced an opera based on <em>Brave New World</em>",
										"performed in over 50 countries on 4 continents",
										"climbed Mt. Pahia in Bora Bora three times",
										"taught web development, web design and Android app development to high school and college students",
										"had artwork chosen for the <em>2015 Stacy M. Israel Art, Architecture + Design Student Exhibition</em> at Norwalk Community College"
										];

		return $model;
	}