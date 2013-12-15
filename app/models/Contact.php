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
		foreach ( $this->DB->fetchAll("SELECT * FROM contacts ORDER BY name ASC") as $contact )
		{
			$return[$contact->id] = $contact;
		}

		return $return;
	}


	/**
	 *
	 *
	 */
	public function hasValidNumber($number)
	{
		return !empty($number = preg_replace('/[^\d\s]/', '', $number)) && $number !== "";
	}

}