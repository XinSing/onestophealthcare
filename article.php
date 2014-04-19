<?php
require 'util/core.php';
require 'model/article_model.php';

$model = new article_model();
$articles = $model->get_all_articles(); // id, content, picture, title

ob_start();
require "view/article_view.php";
$content =  ob_get_clean();

$css[] = 'article';

$footer = 'copyright Looi Xin Sing';

require 'view/basiclayout.php';
?>