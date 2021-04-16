<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost     = 'bharath-mysql1-app';
$databaseName     = 'tutorial';
$databaseUsername = 'bharath';
$databasePassword = 'bharathpass';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
