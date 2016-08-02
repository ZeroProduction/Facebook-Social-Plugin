<?php

/**
 * Description of FB_Like
 *
 * @author ME
 */

class FB_Like extends FBLibrary
{
	//put your code here
	
	protected $_action				= NULL;
	protected $_colorscheme			= NULL;
	protected $_href				= NULL;
	protected $_kid_directed_site	= NULL;
	protected $_layout				= NULL;
	protected $_ref					= NULL;
	protected $_share				= NULL;
	protected $_show_faces			= NULL;
	protected $_size				= NULL;
	protected $_width				= NULL;
	
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
