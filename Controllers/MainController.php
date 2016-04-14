<?php
class MainController {
	
	private $cssPaths = array();
	private $jsPaths = array();
	private $isIndexable;
	private $isFollowable;
	
	// Inclusion des css dans la vue
	public function addCssPaths(array $cssPaths = array()) {
		$this->cssPaths = $cssPaths;
	}
	
	// Inclusion des css dans le header
	public function getCssPaths() {
		return $this->cssPaths;
	}
	
	// Inclusion des js dans la vue
	public function addJsPaths(array $jsPaths = array()) {
		$this->jsPaths = $jsPaths;
	}
	
	// Inclusion du js dans le footer
	public function getJsPaths() {
		return $this->jsPaths;
	}
	
	public function addViewPathPopup(array $paths = array()) {
		foreach($paths as $path) {
			require_once($path);
		}
	}
	
	public function addMetaDescription($description) {
		$this->metaDescription = $description;
	}
	
	public function getMetaDescription() {
		return $this->metaDescription;
	}
	
	public function addMetaTitle($title) {
		$this->metaTitle = $title;
	}
	
	public function getMetaTitle() {
		return $this->metaTitle;
	}
	
	public function addMetaKeywords($keywords) {
		$this->metaKeywords = $keywords;
	}
	
	public function getMetaKeywords() {
		return $this->metaKeywords;
	}
	
	public function redirect($url) {
		header("Location: " . $url);
	}
	
	public function setIndex($isIndexable) {
		$this->isIndexable = $isIndexable;
	}
		
	public function setFollow($isFollowable) {
		$this->isFollowable = $isFollowable;
	}
	
	public function getIndex() {
		return $this->isIndexable;
	}
	
	public function getFollow() {
		return $this->isFollowable;
	}
	
}