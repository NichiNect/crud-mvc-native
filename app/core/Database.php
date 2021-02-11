<?php 

/**
 * Database Class
 */
class Database {
	private $host = DB_HOST;
	private $username = DB_USERNAME;
	private $password = DB_PASSWORD;
	private $dbname = DB_NAME;

	private $dbh;
	private $stmt;
	
	/**
	 * This method to connect database
	 */
	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

		// config parameter for database
		$option = [
			PDO::ATTR_PERSISTENT => TRUE,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try {
			$this->dbh = new PDO($dsn, $this->username, $this->password, $option);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	/**
	 * Method Query to write a SQL Syntax
	 */
	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}

	/**
	 * To cleaning the sql
	 */
	public function bind($param, $value, $type = null)
	{
		if( is_null($type) ) {
			switch (true) {
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
					break;
			}
		}

		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute()
	{
		$this->stmt->execute();
	}

	/**
	 * To make the result value for many records
	 */
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * To make the result value for a row
	 */
	public function resultRow()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	/**
	 * To count the row
	 */
	public function countRow()
	{
		return $this->stmt->rowCount();
	}

}