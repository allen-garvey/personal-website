<?php 
//used to convert art detail model data for view
//requires config.php and text_formatter.php
class ArtworkController{
	protected $artwork;
	protected $getUrl;

	function __construct(array $artwork, $getUrl){
		$this->artwork = $artwork;
		$this->getUrl = $getUrl;
	}

	public function showCarousel(){
		return isset($this->artwork['carousel']);
	}

	public function defaultThumbnailFileName($fileExtension){
		//$fileExtension example .png or .jpg
		return ARTWORK_IMAGE_THUMBNAIL_URL. $this->getUrl.'-thumbnail' . $fileExtension;
	}

	public function defaultFullsizeFileName($fileExtension){
		//$fileExtension example .png or .jpg
		return ARTWORK_IMAGE_URL. $this->getUrl . $fileExtension;
	}

	public function thumbnailUrl(){
		if(isset($this->artwork['thumb_url'])){
			return $this->artwork['thumb_url'];
		}
		return $this->defaultThumbnailFileName($this->artwork['thumbnail_extension']);
	}

	public function fullsizeUrl(){
		if(isset($this->artwork['full_url'])){
			return $this->artwork['full_url'];
		}
		return $this->defaultFullsizeFileName($this->artwork['fullsize_extension']);
	}

	public function imageContainerClass(){
		$orientation_class = 'half_bottom_margin';
		if(isset($this->artwork['orientation']) && $this->artwork['orientation'] === 'portrait'){
			$orientation_class = $orientation_class . ' pull_right_md left_buffer_md';
		}
		return $orientation_class;
	}

	public function artDetailUrl(){
		return ARTWORK_DETAIL_URL. $this->getUrl;
	}

	public function altText(){
		return $this->artwork['alt'];
	}

	public function title(){
		return $this->artwork['title'];
	}

	public function caption(){
		return TextFormatter::format_html_text_xpath($this->artwork['description']);
	}

	public function releaseDate(){
		$release_date = DateTime::createFromFormat('m/d/Y', $this->artwork['date_completed']);
		return $release_date->format('m/d/y');
	}

	public function carouselData(){
		return $this->artwork['carousel'];
	}
}