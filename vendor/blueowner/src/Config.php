<?php

Class Config
{

	public $app;
	public $database;

	/**
	 *
	 *
	 */
	public function __construct()
	{
		$this->app = 		require '../app/config/app.php';
		$this->database = 	require '../app/config/database.php';
	}

}