<?php
$db = new Mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($db->connect_errno)
	die("Unable to enstablish connection to database: " . $db->connect_error);


//return an associate array of all rows from the given query
function select($selectquery)
{
	$rows = array();
	if($result = $db->query($selectquery))
	{
		while ($row = $result->fetch_assoc())
			$rows[] = $row;
		$result->free();
	}
	return $rows;
}

//insert a new row with provided values, into a given table
function insert_row($values, $table)
{
	return $db->query("INSERT INTO `$table` VALUES($values)");
}

//count the number of rows of result of a given query
function row_count($selectquery)
{
	return $db->query($selectquery)->num_rows;
}