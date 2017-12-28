<?php
// Theme with update info
$packages['theme'] = array( //Replace theme with theme stylesheet slug that the update is for
	'versions' => array(
		'1.0' => array( //Array name should be set to current version of update
			'version'        => '1.0', //Current version available
			'date'           => '2010-04-10', //Date version was released
			//theme.zip is the same as file_name
			'package'        => 'http://url_to_your_site/download.php?key=' . md5( 'theme.zip' . mktime( 0, 0, 0, date( "n" ), date( "j" ), date( "Y" ) ) ),
			//file_name is the name of the file in the update folder.
			'file_name'      => 'theme.zip',    //File name of theme zip file
			'author'         => 'Author Name', //Author of theme
			'name'           => 'Theme Name', //Name of theme
			'requires'       => '3.1', //Wordpress version required
			'tested'         => '3.1', //WordPress version tested up to
			'screenshot_url' => 'http://url_to_your_theme_site/screenshot.png' //url of screenshot of theme
		)
	),
	'info'     => array(
		'url' => 'http://url_to_your_theme_site'  // Website devoted to theme if available
	)
);
