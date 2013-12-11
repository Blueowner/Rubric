<?php

Class Route
{

	private $get;

	public $response;
	

	/**
	 *
	 *
	 */
	public function __construct($get)
	{
		$this->get = $get;
		$this->response = false;
	}


	/**
	 *
	 *
	 */
	public function get($uri, $handler)
	{
		if ($this->get === $uri)
		{
			$this->response = true;

			$class  = explode('@', $handler)[0];
			$method = explode('@', $handler)[1];

			$Class = new $class;

			$action = $Class->$method();

			echo $action;
		}
	}

}