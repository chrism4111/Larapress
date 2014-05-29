<?php
/*
 * Regitering Events
 */




//  
/*ClassLoader::addDirectories(array(
	app_path().'/src/larapress/'
      ));*/

$current_theme = App::make('config')['larapress.themes.current'];

include_once app_path().'/content/themes/'.$current_theme.'/events.php';
