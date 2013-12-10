<?php

Class Route
{

	private $get;
	

	/**
	 *
	 *
	 */
	public function __construct($get)
	{
		$this->get = $get;
	}


	/**
	 *
	 *
	 */
	public function get($uri, $handler, $data = null)
	{
		// echo $uri . " === ";
		// echo $this->get . "<br/>";
		
		if ($this->get === $uri)
		{

			$class  = explode('@', $handler)[0];
			$method = explode('@', $handler)[1];

			$Class = new $class;

			echo $data;

			if ($data)  $action = $Class->$method($data);
			else 		$action = $Class->$method();

			echo $action;
		}
	}

}