<?php

Class ContactController
{

	private $View;

	private $Contacts;

	/**
	 *
	 *
	 */
	public function __construct()
	{
		$this->View = new View;

		$this->Contact = new Contact;
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
		if ($this->Contact->validateNumber($number = $_POST['number']))
		{
			$this->Contact->DB->insert('contacts', ['name' => $_POST['name'], 'number' => $number]);
			
			return header('Location: /sandbox/Rubric/public/');
		}

		return header('Location: /sandbox/Rubric/public/create/');

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
		if ($this->Contact->validateNumber($number = $_POST['number']))
		{
			$this->Contact->DB->update('contacts', ['name' => $_POST['name'], 'number' => $number], "WHERE id={$_GET[id]}");	
			
			return header("Location: /sandbox/Rubric/public/show/{$_GET[id]}");
		}

		return header("Location: /sandbox/Rubric/public/edit/{$_GET[id]}");

	}


	/**
	 *
	 *
	 */
	public function destroy()
	{
		if ($this->Contact->DB->delete('contacts', "WHERE id={$_GET[id]}"))
		{
			return header('Location: /sandbox/Rubric/public/');	
		}

		return header("Location: /sandbox/Rubric/public/edit/{$_GET[id]}");
	}

}