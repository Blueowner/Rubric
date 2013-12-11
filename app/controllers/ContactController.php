<?php


// Class ContactController extends Contact --
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
		return $this->View->make('site/index', ["contacts" => $this->Contact->all()]);
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
		$this->Contact->DB->insert('contacts', ['name' => $_POST['name'], 'number' => $_POST['number']]);

		// header('Location: /');
		// die;
	}


	/**
	 *
	 *
	 */
	public function show()
	{
		return $this->View->make('site/show', ["contacts" => $this->Contact->all()[$_GET['id']]]);
	}


	/**
	 *
	 *
	 */
	public function edit()
	{
		return $this->View->make('site/edit', ["contacts" => $this->Contact->all()[$_GET['id']]]);
	}


	/**
	 *
	 *
	 */
	public function update()
	{
		if ($_POST['number'] !== "" && !empty($_POST['number']))
		{
			$this->Contact->DB->update('contacts', ['name' => $_POST['name'], 'number' => $_POST['number']], "WHERE id={$_GET[id]}");
			
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
		$this->Contact->DB->delete('contacts', "WHERE id={$_GET[id]}");

		// header('Location: /');
		// die;	
	}

}