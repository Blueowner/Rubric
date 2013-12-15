<?php

Class View
{

	/**
	 *
	 *
	 */
	public function make($view, $data = null)
	{
		ob_start();
		

		include '../vendor/blueowner/src/Helpers.php';

		if ($data) extract($data);

		$view = "{$view}.php";

		include '../app/views/master.php';


		$page = ob_get_contents();
		ob_end_clean();

		return $page;
	}

}