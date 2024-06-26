<?php

include('../config/Database.php');
include('../models/Bestemmia.php');

class BestemmieService
{
	private Database $database;
	private ?PDO $connection;
	private Bestemmia $bestemmia;

	public function __construct()
	{
		$this->database = new Database();
		$this->connection = $this->database->getConnection();
		$this->bestemmia = new Bestemmia($this->connection);
	}

	public function __destruct()
	{
		if ($this->connection) {
			$this->connection = null;
		}
	}

	public function getRandom(): ?array
	{
		return $this->bestemmia->getRandom();
	}

	public function create($data): bool
	{
		if (empty($data->bestemmia)) {
			return false;
		}

		return $this->bestemmia->create($data->bestemmia);
	}

	public function delete($id): bool
	{
		if (empty($id)) {
			return false;
		}

		return $this->bestemmia->delete($id);
	}
}
