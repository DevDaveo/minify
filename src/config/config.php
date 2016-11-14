<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Sort Direction
    |--------------------------------------------------------------------------
    |
    | You can set the sort direction (ascending/descending) when
    | minifying full directories.
    |
    */

    'reverse_sort' => true,

    /*
    |--------------------------------------------------------------------------
    | App environments to not minify
    |--------------------------------------------------------------------------
    |
    | These environments will not be minified and all individual files are
    | returned
    |
    */

    'ignore_environments' => array(
	    'local',
    ),

    /*
    |--------------------------------------------------------------------------
    | Build filename
    |--------------------------------------------------------------------------
    |
    | Minify uses a random name when it creates the build files, if you prefer to
    | use the same name allways, please specify it here
    |
    */
    
    'custom_filename' => '', //Leave empty to use random

    /*
    |--------------------------------------------------------------------------
    | CSS build path
    |--------------------------------------------------------------------------
    |
    | Minify is an extension that can minify your css files into one build file.
    | The css_builds_path property is the location where the builded files are
    | stored. This is relative to your public path. Notice the trailing slash.
    | Note that this directory must be writeable.
    |
    */

    'css_build_path' => '/css/builds/',
    'css_url_path' => '/css/builds/',
    'css_file_name' => '', //Leave empty to use random

    /*
    |--------------------------------------------------------------------------
    | JS build path
    |--------------------------------------------------------------------------
    |
    | Minify is an extension that can minify your js files into one build file.
    | The js_build_path property is the location where the builded files are
    | stored. This is relative to your public path. Notice the trailing slash.
    | Note that this directory must be writeable.
    |
    */

    'js_build_path' => '/js/builds/',
    'js_url_path' => '/js/builds/', 
    'js_file_name' => '', //Leave empty to use random

	/*
    |--------------------------------------------------------------------------
    | Hash modification
    |--------------------------------------------------------------------------
    |
    | You can disable usage of modification time (mtime) for hash build and
	| add additional salt (exp. commit hash) for hash build
    |
    */

    'disable_mtime' => false,
    'hash_salt' => '', 

	/*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | You can set the base URL for the links generated with the configuration
    | value. By default if empty HTTP_HOST would be used.
    |
    */
	'base_url' => ''
);
