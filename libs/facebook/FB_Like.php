<?php

/**
 * Description of FB_Like
 *
 * @author ME
 */

class FB_Like extends FBLibrary
{
	//put your code here
	
	protected $action				= 'like';
	protected $colorscheme			= 'light';
	protected $href					= 'http://delfi.ee/';
	protected $kid_directed_site	= 'false';
	protected $layout				= 'standard';
	protected $ref					= NULL;
	protected $share				= true;
	protected $show_faces			= true;
	protected $size					= 'small';
	protected $height				= NULL;
	protected $width				= NULL;
	
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
