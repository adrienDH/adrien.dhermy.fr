<?php
class MainController {
	
	/**
	 * @var $cssPaths array
	 */
	private $cssPaths = array();
	
	/**
	 * @var $jsPaths array
	 */
	private $jsPaths = array();
	
	/**
	 * @var $metaTitle string
	 */
	private $metaTitle = "";
	
	/**
	 * @var $metaDescription string
	 */
	private $metaDescription = "";
	
	/**
	 * @var $metaKeywords string
	 */
	private $metaKeywords = "";
	
	/**
	 * Inclusion des css dans la vue
	 * 
	 * @param array $cssPaths
	 */
	public function addCssPaths(array $cssPaths = array()) {
		$this->cssPaths = $cssPaths;
	}
	
	/**
	 * Inclusion des css dans le header
	 */
	public function getCssPaths() {
		return $this->cssPaths;
	}
	
	/**
	 * Inclusion des js dans la vue
	 * 
	 * @param array $jsPaths
	 */
	public function addJsPaths(array $jsPaths = array()) {
		$this->jsPaths = $jsPaths;
	}
	
	/**
	 * Inclusion du js dans le footer
	 */
	public function getJsPaths() {
		return $this->jsPaths;
	}
	
	/**
	 * @param array $paths
	 */
	public function addViewPathPopup(array $paths = array()) {
		foreach($paths as $path) {
			require_once($path);
		}
	}
	
	/**
	 * @param string $description
	 */
	public function addMetaDescription($description) {
		$this->metaDescription = $description;
	}
	
	/**
	 * return string $metaDescription 
	 */
	public function getMetaDescription() {
		return $this->metaDescription;
	}
	
	/**
	 * @param string $title
	 */
	public function addMetaTitle($title) {
		$this->metaTitle = $title;
	}
	
	/**
	 * return string $metaTitle
	 */
	public function getMetaTitle() {
		return $this->metaTitle;
	}
	
	/**
	 * @param array $keywords
	 */
	public function addMetaKeywords($keywords) {
		$this->metaKeywords = $keywords;
	}
	
	/**
	 * return $metaKeywords
	 */
	public function getMetaKeywords() {
		return $this->metaKeywords;
	}
}