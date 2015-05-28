<?php
	$is_active = array('home' => '', 'code' => '', 'video' => '', 'music' => '', 'artwork' => '');
	if(isset($title)){
		foreach ($is_active as $key => $value) {
			if($key === $title){
				$is_active[$key] = 'active';
				break;
			}
		}
	}
?>
<nav class='navbar navbar-inverse'>
	<div class='container'>
		<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		</button>
		<a href="<?= BASE_URL;?>" class='navbar-brand text-muted'>Allen Garvey</a>
		<div class='collapse navbar-collapse'>
			<ul class='nav navbar-nav navbar-right'>
				<li class='<?= $is_active['home'] ?>'><a href="<?= BASE_URL;?>">Home</a></li>
				<li class='<?= $is_active['code'] ?>'><a href="<?= CODE_URL; ?>">Code</a></li>
				<li class='<?= $is_active['artwork'] ?>'><a href="<?= ARTWORK_URL; ?>">Artwork</a></li>
				<li class='<?= $is_active['music'] ?>'><a href="<?= MUSIC_URL; ?>">Music</a></li>
				<li class='<?= $is_active['video'] ?>'><a href="<?= VIDEO_URL; ?>">Video</a></li>
			</ul>
		</div>
	</div>	
</nav>