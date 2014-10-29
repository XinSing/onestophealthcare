<?php
require 'util/core.php';

$private_hosp = get_all_private_hosp($db);
echo '<pre>';
print_r($private_hosp);
echo '</pre>';

require "view/header_view.php";
require "view/hospital_private_view.php";
require 'view/footer_view.php';
?>