<?php

require_once 'IFB.php';

/**
 * Description of FBLibrary usable as container
 * FACEBOOK Social Plugin Demo/Boilerplate
 * @author ME
 */

class FBLibrary
{
	//put your code here
	
	protected $_title		= NULL;
	protected $_current		= NULL;
	protected $_extension	= '.php'; 
	
	public function __construct($title) 
	{
		$this->_title	= $title;
	}

	/**
	 * Require component and render
	 * 
	 * @param Strign $component
	 * @param Boolean $render(Optional)
	 * @return \FBLibrary or Component object
	 */
	
	public function requireComponent($component, $render = false) 
	{
		
		$key = is_array($component) ? array_keys($component)[0] : $component;
		
		$name = 'FB_' . $key;
		
		$full_path = ABSOLUTE_LIBS . DS . $name . $this->_extension;
		
		if ( ! file_exists($full_path)) 
		{
			return NULL;
		}	
		
		require_once $full_path;
				
		$this->_current = new $name($this);
		
		// For assigning values to object
		
		if (is_array($component)) 
		{
			$this->_assign($component, $key);
		}
		
		// Automatically render after finishing
		
		if ($render) 
		{
			var_dump($this->_current);
			
			return $this->_current->render($key);
		}
		return $this;
	}

	/**
	 * For mass assignment to component object
	 * 
	 * @param array $component
	 * @param String $object_name
	 * @return \FBLibrary
	 */
	
	private function _assign(Array $component, $object_name) 
	{
		foreach ($component as $key => $value) 
		{
			$this->_current->Set($key, $value);
		}
		
		return $this;
		
	}
	
	/**
	 * Require view file and renders object 
	 * 
	 * @param type $component
	 * @return \FBLibrary
	 */
	
	protected function render($component)
	{
		$full_path = ABSOLUTE_VIEW . DS . $component . $this->_extension;

		if ( ! file_exists($full_path)) 
		{
			return null;
		}

		$view = require_once $full_path;
		return $view;
	}
	
}
