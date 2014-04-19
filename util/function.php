<?php
function get_view($path){
	ob_start();
	require $path;
	return ob_get_clean();	
}

?>