<?php
function alert($msg)
{
	echo "<script>alert('$msg')</script>";
}
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

function get_all_article_categories($db){
	$article_category = select($db, "SELECT * FROM article_category");
	return $article_category;
}

function get_all_articles_by_category($db, $categoryid){
	$article = select($db, "SELECT * FROM article WHERE category = $categoryid");
	return $article;
}

function get_all_title($db){
	$titles = select($db, "SELECT id, title FROM article");
	return $titles;
}

function delete_article($db, $deleteid)
{
	$qry = "DELETE FROM `article` WHERE id = $deleteid";
	return $db->query($qry);
}

function search_articles($db, $keyword)
{
	$articles = select($db, "SELECT * FROM article WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'");
	return $articles;
}

function get_article_by_id($db, $aid)
{
	$articles = select($db, "SELECT * FROM article WHERE id = $aid");
	return $articles;
}

function search_videos($db, $keyword)
{
	$articles = select($db, "SELECT * FROM video WHERE title LIKE '%$keyword%' OR description LIKE '%$keyword%'");
	return $articles;
}

function add_diary($db, $bf, $lunch, $dinner, $supper, $exer, $slp, $coffee, $alcohol, $date, $id)
{
	$qry = "INSERT INTO diary VALUES('','$id','$bf','$lunch','$dinner','$supper','$slp','$exer','$alcohol','$coffee','$date')";
	return $db->query($qry);
}

function get_all_diary($db, $id)
{
	$diaries = select($db, "SELECT * FROM diary WHERE userid = $id");
	return $diaries;
}

function get_all_videos($db)
{
	$video = select($db, "SELECT * FROM video");
	return $video;
}

function get_video_by_id($db, $id)
{
	$video = select($db, "SELECT * FROM video WHERE id = $id");
	return $video;
}

function add_video($db, $title, $desc, $path)
{
	$qry = "INSERT INTO video VALUES('','$title','$path','$desc')";
	if($db->query($qry))
		return $db->insert_id;
	else 
		return 0;
}

function delete_video($db, $id)
{
	$video = select($db, "SELECT * FROM video WHERE id = $id");
	if(sizeof($video) > 0)
	{
		foreach($video as $v){
			if(file_exists($v['path']))
			{
				unlink($v['path']);
				//alert( 'unlink '.$v['path']);
			}
			else
				alert( 'file not exist '.$v['path']);
			//alert( 'aaaa '.$v);
		}
		//echo '<pre>';
		//print_r($video);
		//echo '</pre>';
	}
	else
		alert( 'no video selected');
	//alert( 'aaaa ' . sizeof($video));
	$qry = "DELETE FROM `video` WHERE id = $id";
	return $db->query($qry);
}

function get_comments($db, $id)
{
	$comments = select($db, "SELECT fc.*, u.fullname FROM forum_comment fc INNER JOIN user u ON u.id = fc.user_id WHERE thread_id = $id");
	return $comments;
}

function get_thread($db, $section)
{
	$thread = select($db, "SELECT ft.*, u.fullname FROM forum_thread ft INNER JOIN user u ON u.id = ft.user_id WHERE forum_section = '$section'");
	return $thread;
}

function add_thread($db, $content, $forumSection)
{
	$uid = $_SESSION['id'];
	$qry = "INSERT INTO `forum_thread` VALUES('',$uid,'$content',NOW(),'','$forumSection')";
	return $db->query($qry);
}