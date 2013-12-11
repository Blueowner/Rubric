<?php

Class DB
{

	protected $db;

	/**
	 *
	 *
	 */
	public function __construct()
	{
		try {
			$this->db = new PDO('mysql:host=localhost;dbname=rubric', 'root', 'admin');			
		} catch (Exception $e) {
			echo "Database connection error: {$e}";
		}
	}


	/**
	 *
	 *
	 */
	public function fetch($q)
	{
		$stmt = $this->db->prepare( "{$q} LIMIT 1" );
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}


	/**
	 *
	 *
	 */
	public function fetchAll($q)
	{
		$stmt = $this->db->prepare( $q );
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}


	/**
	 *
	 *
	 */
	public function insert($table, $data)
	{
		foreach ($data as $key => $val)
		{
			$names[]  =    $key;
			$values[] = ":{$key}";
		}

		$names  = join(', ', $names);
		$values = join(', ', $values);

		$stmt = $this->db->prepare( "INSERT INTO {$table} ({$names}) VALUES ({$values})" );

		return $stmt->execute( $data );
	}


	/**
	 *
	 *
	 */
	public function update($table, $data, $condition)
	{
		foreach ($data as $key => $val)
		{
			$values[] = "{$key}=:{$key}";
		}

		$values = join(', ', $values);

		$stmt = $this->db->prepare( "UPDATE {$table} SET {$values} {$condition}" );

		return $stmt->execute( $data );
	}


	/**
	 *
	 *
	 */
	public function delete($table, $condition)
	{
		$stmt = $this->db->prepare( "DELETE FROM {$table} {$condition}" );

		return $stmt->execute();
	}

}