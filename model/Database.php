<?php
class Database{
    function __construct() {
		$this->con = new Mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if ($this->con->connect_errno)
			die("Unable to enstablish connection to database: " . $this->con->connect_error);
	}

	//return an associate array of all rows from the given query
	public function select($selectquery)
	{
		$rows = array();
		if($result = $this->con->query($selectquery))
		{
			while ($row = $result->fetch_assoc())
				$rows[] = $row;
			$result->free();
		}
		return $rows;
	}

	//insert a new row with provided values, into a given table
	public function insert_row($values, $table)
	{
		return $this->con->query("INSERT INTO `$table` VALUES($values)");
	}

	//count the number of rows of result of a given query
	public function row_count($selectquery)
	{
		return $this->con->query($selectquery)->num_rows;
	}
		
}