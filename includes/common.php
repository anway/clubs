<?php

//define database constants
define("DB_USER","awk");
define("DB_PASS","qIyI0eRWQ19q");
define("DB_HOST","mysql.hcs.harvard.edu");
define("DB_NAME","awk");

//create a DB connection
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to mysql server.');
mysql_select_db(DB_NAME);

session_start();

?>