<?php
define("MYSQL_SERVER", "sysmsql.mysql.database.azure.com");
define("MYSQL_USER", "sysmsql");
define("MYSQL_PASSWORD", "March14032003");
define("MYSQL_DATABASE", "example_lite");

$mysqli = new mysqli(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD) or die ('I cannot connect to the database because 1: ' . $mysqli->error);

$mysqli->select_db(MYSQL_DATABASE) or die ('I cannot connect to the database because 2: ' . $mysqli->error);

?>