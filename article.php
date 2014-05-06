<?php
require 'util/core.php';

$articles = get_all_articles($db); // id, content, picture, title

require "view/header_view.php";
require "view/article_view.php";
require 'view/footer_view.php';
?>