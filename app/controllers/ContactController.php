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

		$this->Contacts = new Contacts;
	}


	/**
	 *
	 *
	 */
	public function index()
	{
		return $this->View->make('site/index', ["contacts" => $this->Contacts->all()]);
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
		$this->Contacts->DB->insert('contacts', ['name' => $_POST['name'], 'number' => $_POST['number']]);

		// header('Location: /');
		// die;
	}


	/**
	 *
	 *
	 */
	public function show()
	{
		return $this->View->make('site/show', ["contacts" => $this->Contacts->all()[$_GET['id']]]);
	}


	/**
	 *
	 *
	 */
	public function edit()
	{
		return $this->View->make('site/edit', ["contacts" => $this->Contacts->all()[$_GET['id']]]);
	}


	/**
	 *
	 *
	 */
	public function update()
	{
		if ($_POST['number'] !== "" && !empty($_POST['number']))
		{
			$this->Contacts->DB->update('contacts', ['name' => $_POST['name'], 'number' => $_POST['number']], "WHERE id={$_GET[id]}");
			
			return 'done';
		}

		header("Location: /sandbox/Rubric/public/show/{$_GET[id]}");
	}


	/**
	 *
	 *
	 */
	public function destroy()
	{
		$this->Contacts->DB->delete('contacts', "WHERE id={$_GET[id]}");

		// header('Location: /');
		// die;	
	}

}