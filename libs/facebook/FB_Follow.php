<?php

/**
 * Description of FB_Like
 *
 * @author ME
 */

class FB_Follow extends FBLibrary implements IFB
{
	//put your code here

	protected $colorscheme			= 'light';
	protected $href					= 'https://www.facebook.com/zuck';
	protected $kid_directed_site	= false;
	protected $layout				= 'standard';
	protected $show_faces			= true;
	protected $size					= 'small';
	protected $width				= 400;
	protected $height				= 100;
	
	public function render($component) 
	{
		parent::render($component);
	}

	public function set($key, $value)
	{
		isset($this->{$key}) ? $this->{$key} = $value : NULL;
		return $this;
	}

}
