<?php
// Start session
session_start(); // you can use session in any file
ini_set("memory_limit", "200M");

// Include Configuration
require_once('config/config.php');

// Helper Function Files
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

/*
 * Autoload Classes
 */
function __autoload($class_name) {
    require_once('libraries/'.$class_name . '.php');
}
