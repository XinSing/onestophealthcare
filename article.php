<?php
require 'util/core.php';
require 'model/article_model.php';

$articles = get_all_articles(); // id, content, picture, title

$content = get_view("view/article_view.php");

$css[] = 'article';

$footer = 'copyright Looi Xin Sing';

require 'view/basiclayout.php';
?>