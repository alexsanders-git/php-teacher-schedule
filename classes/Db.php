<?php

class Db {
	private $connection;

	public function __construct( array $db_config ) {
		$dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";

		try {
			$this->connection = new PDO( $dsn, $db_config[ 'username' ], $db_config[ 'password' ], $db_config[ 'options' ] );
			// return $this;
		} catch ( PDOException $e ) {
			echo 'Database Error: ' . $e->getMessage();
		}
	}

	public function query( $query, $params = [] ) {
		$stmt = $this->connection->prepare( $query );
		$stmt->execute();
		return $stmt;
	}
}
