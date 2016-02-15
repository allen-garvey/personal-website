<div id="art-detail-carousel" class="carousel slide <?= $selected_artwork->imageContainerClass(); ?>" data-ride="carousel" data-interval="false">
  <div class="carousel-inner" role="listbox">
    <?php 
    	$count = 0;
    	foreach ($selected_artwork->carouselData() as $art) {
    ?>

	<div class="item <?php if($count===0){echo 'active';} ?>">
		<img src="<?= $art['image_url']; ?>" alt="<?= $art['image_url'];?>">
		<?php 
			if(isset($art['caption'])){
				echo "<div class='carousel-caption'>$art[caption]</div>";
			}
		?>
    </div>
<?php $count++;} //end foreach loop ?>
	</div>

  <ol class="carousel-indicators">
    <?php 
    	for ($i=0; $i < $count ; $i++) { 
    	$indicator_class = '';
    	if($i === 0){
    		$indicator_class = "class='active'";
    	}
     ?>
    <li data-target="#art-detail-carousel" data-slide-to="<?= $i; ?>" <?= $indicator_class; ?>></li>
    <?php } //end for loop ?>
  </ol>
</div>