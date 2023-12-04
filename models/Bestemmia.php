<?php

class Bestemmia
{
	private mixed $conn;

	public function __construct($db)
	{
		$this->conn = $db;
	}


	public function create($text_)
	{
		$query = "INSERT INTO bestemmie (text_) VALUES (:text_)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(":text_", $text_);

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