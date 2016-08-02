<?php

/**
 * Description of FB_Like
 *
 * @author ME
 */

class FB_Page extends FBLibrary implements IFB
{
	//put your code here

	protected $href						= 'https://www.facebook.com/Zero-Production-O&#xdc;-571844476296573/';
	protected $width					= 340;
	protected $height					= 500;
	protected $tabs						= 'timeline';
	protected $hide_cover				= false;
	protected $show_facepile			= true;
	protected $hide_cta					= false;
	protected $small_header				= false;
	protected $adapt_container_width	= true;
	
	public function render($component) 
	{
		return parent::render($component);
	}

	public function set($key, $value)
	{
		isset($this->{$key}) ? $this->{$key} = $value : NULL;
		return $this;
	}

}
