<?php

/**
 * Description of FB_Like
 *
 * @author ME
 */

class FB_Page extends FBLibrary implements IFB
{
	//put your code here

	protected $_href					= 'https://www.facebook.com/Zero-Production-O&#xdc;-571844476296573/';
	protected $_width					= NULL;
	protected $_height					= NULL;
	protected $_tabs					= NULL;
	protected $_hide_cover				= NULL;
	protected $_show_facepile			= NULL;
	protected $_hide_cta				= NULL;
	protected $_small_header			= NULL;
	protected $_adapt_container_width	= NULL;
	
	public function render($component) 
	{
		return parent::render($component);
	}

	public function set($key, $value)
	{
		isset($this->_{$key}) ? $this->_{$key} = $value : NULL;
		return $this;
	}
	
	public function Get($key) 
	{
		return isset($this->_{$key}) ? $this->_{$key} : NULL;
	}

}
