<?php

/*
 * Xibo - Digital Signage - http://www.xibo.org.uk
 *
 * This file is part of Xibo - and is automatically generated by the installer
 *
 * You should not need to edit this file, unless your SQL connection details have changed.
 */

defined('XIBO') or die(__("Sorry, you are not allowed to directly access this page.") . "<br />" . __("Please press the back button in your browser."));

global $dbhost;
global $dbuser;
global $dbpass;
global $dbname;

$dbhost = $_SERVER['CMS_DATABASE_HOST'] . ':' . $_SERVER['CMS_DATABASE_PORT'];
$dbuser = $_SERVER['CMS_DATABASE_USERNAME'];
$dbpass = $_SERVER['CMS_DATABASE_PASSWORD'];
$dbname = $_SERVER['CMS_DATABASE_NAME'];

if (!defined('SECRET_KEY'))
define('SECRET_KEY','SqTC6LkV');

if (file_exists('/var/www/cms/custom/settings-custom.php'))
    include_once('/var/www/cms/custom/settings-custom.php');

?>