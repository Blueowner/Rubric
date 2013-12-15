<?php

Class ContactController
{

	private $View;

	private $Contacts;

	private $base;

	/**
	 *
	 *
	 */
	public function __construct()
	{
		$this->View = new View;

		$this->Contact = new Contact;

		$this->base = (new Config)->app->base;
	}


	/**
	 *
	 *
	 */
	public function index()
	{
		foreach ($this->Contact->all() as $contact)
		{
			$initials[ucfirst($contact->name[0])][$contact->id] = $contact;
		}

		return $this->View->make('site/index', ["initials" => $initials]);
	}


	/**
	 *
	 *
	 */
	public function create()
	{
		return $this->View->make('site/create');
	}


	/**
	 *
	 *
	 */
	public function store()
	{
		if ($this->Contact->hasValidNumber($number = $_POST['number']))
		{
			$this->Contact->DB->insert('contacts', ['name' => $_POST['name'] ? $_POST['name'] : 'Unknow', 'number' => $number]);
			
			return header("Location: {$this->base}");
		}

		return header("Location: {$this->base}create/");

	}


	/**
	 *
	 *
	 */
	public function show()
	{
		return $this->View->make('site/show', ["contact" => $this->Contact->all()[$_GET['id']]]);
	}


	/**
	 *
	 *
	 */
	public function edit()
	{
		return $this->View->make('site/edit', ["contact" => $this->Contact->all()[$_GET['id']]]);
	}


	/**
	 *
	 *
	 */
	public function update()
	{
		if ($this->Contact->hasValidNumber($number = $_POST['number']))
		{
			$this->Contact->DB->update('contacts', ['name' => $_POST['name'] ? $_POST['name'] : 'Unknow', 'number' => $number], "WHERE id={$_GET[id]}");	
			
			return header("Location: {$this->base}show/{$_GET[id]}");
		}

		return header("Location: {$this->base}edit/{$_GET[id]}");

	}


	/**
	 *
	 *
	 */
	public function destroy()
	{
		if ($this->Contact->DB->delete('contacts', "WHERE id={$_GET[id]}"))
		{
			return header("Location: {$this->base}");
		}

		return header("Location: {$this->base}edit/{$_GET[id]}");
	}

}