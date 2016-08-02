<?php

/**
 * Description of FB_Like
 *
 * @author ME
 */

class FB_Share extends FBLibrary implements IFB
{
	//put your code here

	protected $href				= NULL;
	protected $layout			= NULL;
	protected $mobile_iframe	= false;
	protected $size				= NULL;
	
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
