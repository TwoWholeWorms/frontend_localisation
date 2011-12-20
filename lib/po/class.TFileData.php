<?php

	if(!defined('__IN_SYMPHONY__')) die('<h2>Symphony Error</h2><p>You cannot directly access this file</p>');
	
	
	
	require_once (EXTENSIONS . '/frontend_localisation/lib/class.TFileData.php');
	
	
	
	/**
	 * Deals with business data for GNU PO Translations.
	 *
	 * @package XML
	 *
	 * @author Vlad Ghita
	 */
	final class PO_TFileData extends TFileData
	{
		
		public function __construct(Translation $translation){
			// set extension first
			$this->extension = 'po';
			
			// call constructor after. Need extension to create default content.
			parent::__construct($translation);
		}
		
		
		
		/**
		 * If $content is missing, force file structure.
		 *
		 * @param string $content (optional) - content to be written.
		 *
		 * @see TFile::setContent()
		 *
		 * @return boolean - true if success, false otherwise
		 */
		public function setContent($content = null){
			// set default content
			if( empty($content) || !is_string($content) ){
				
			}
			
			return (boolean) parent::setContent($content);
		}
		
		/**
		 * @see TFileData::getAsTArray()
		 */
		public function getAsTArray(){
			
		}
		
		/**
		 * @see TFileData::setFromTArray()
		 */
		public function setFromTArray(array $translations){
			// $content = ...
			
			return (boolean) $this->setContent( $content );
		}
	}
	