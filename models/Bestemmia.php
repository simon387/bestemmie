<?php

class Bestemmia
{
	private mixed $conn;

	public function __construct($db)
	{
		$this->conn = $db;
	}


	public function create($bestemmia)
	{
		$query = "INSERT INTO bestemmie (bestemmia) VALUE (:bestemmia)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(":bestemmia", $bestemmia);

		return $stmt->execute();
	}

	public function getRandom()
	{
		$query = "SELECT * FROM bestemmie ORDER BY RAND() LIMIT 1;";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}