<nav class='navbar navbar-inverse'>
	<div class='container'>
		<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
			<?php include(ROOT_PATH.'images/evil-icons/ei-navicon.svg'); ?>
		</button>
		<a href="<?= BASE_URL;?>" class='navbar-brand text-muted'>Allen Garvey</a>
		<div class='collapse navbar-collapse'>
			<ul class='nav navbar-nav navbar-right'>
				<li class='active'><a href="<?= BASE_URL;?>">Home</a></li>
				<li><a href="<?= CODE_URL; ?>">Code</a></li>
				<li><a href="<?= ARTWORK_URL; ?>">Artwork</a></li>
				<li><a href="<?= MUSIC_URL; ?>">Music</a></li>
				<li><a href="<?= VIDEO_URL; ?>">Video</a></li>
			</ul>
		</div>
	</div>	
</nav>