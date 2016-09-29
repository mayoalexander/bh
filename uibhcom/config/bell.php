<?php

/**
* 
*/
class Bell
{
	
	function __construct()
	{
		$this->site = 'http://ui.bh.com';
	}

	public function debug($data, $exit=NULL)
	{
		var_dump($data);
		if ($exit==true) {
			exit;
		}
	}

	public function list($data, $exit=NULL)
	{
		foreach ($data as $key => $value) {
			echo '<p><strong>'.$key.'</strong> '.$value.'</p>';
		}
	}
}