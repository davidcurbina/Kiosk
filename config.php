<?php

//Set Debug On
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Creating Conf Class to be used for database connection
class Conf
{
 const DEF_APP = 'Test Application';
 
 const DB_HOST = 'localhost';
 const DB_NAME   = 'kiosk';
 const DB_USERNAME = 'davidcurbina';
 const DB_PASSWORD = 'Password';
}
?>