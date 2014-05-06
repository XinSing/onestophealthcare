<?php

function select($db, $selectquery)
{
	$rows = array();
	if($result = $db->query($selectquery))
	{
		while ($row = $result->fetch_assoc())
			$rows[] = $row;
	}
	return $rows;
}

function login($db, $un, $pw){
	$user = select($db, "SELECT * FROM user WHERE username = '$un' AND password = '$pw'");
	if(sizeof($user) == 1)
	{
		return $user;
	}
	return false;
}

function check_user($db, $un)
{
	$user = select($db, "SELECT * FROM user WHERE username = '$un'");
	if(sizeof($user) > 0)
	{
		return false;
	}
	return true;
}

function register($db, $un, $pw, $fn, $em, $phone)
{
	$qry = "INSERT INTO user VALUES('','$un','$pw','user','$fn','$em','$phone')";
	return $db->query($qry);
}

function get_all_articles($db){
	$article = select($db, "SELECT * FROM article");
	return $article;
}

function get_all_title($db){
	$article = select($db, "SELECT id, title FROM article");
	return $article;
}