<?php

Class Contact
{
	public $DB;

	/**
	 *
	 *
	 */
	public function __construct()
	{
		$this->DB = new DB;
	}


	/**
	 *
	 *
	 */
	public function all()
	{
		foreach ( $this->DB->fetchAll("SELECT * FROM contacts") as $contact )
		{
			$return[$contact->id] = $contact;
		}

		return $return;
	}

}