<?php

/**
 * Description of FB_Like
 *
 * @author ME
 */

class FB_Share extends FBLibrary implements IFB
{
	//put your code here

	protected $_href				= NULL;
	protected $_layout				= NULL;
	protected $_mobile_iframe		= false;
	protected $_size				= NULL;
	
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
