<?php

define('APP_URL', 'http://localhost/v1');
$_app_stage = 'Live';

// Database
$db_host	    = 'localhost';
$db_user        = 'root';
$db_password	= '';
$db_name	    = 'v1.2';

// Database Radius
$radius_host	    = 'localhost';
$radius_user        = 'root';
$radius_pass    	= '';
$radius_name	    = 'v1.2';

if($_app_stage!='Live'){
    error_reporting(E_ERROR);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}else{
    error_reporting(E_ERROR);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}
