<?php
  	error_reporting(0);
  	include 'include/mysql-wrapper.php';
  	session_start();

  	define("DB_HOST", 'mysql');
  	define("DB_USER", 'supervip');
  	define("DB_PASS", '2Sjq17WlKeugmCqNxgys');
  	define("DB_NAME", 'tcb');
  	define("SITE_URL", 'http://jerichoesber.com/tcb');
  	define("UPLOADS_PATH", getcwd()."/uploads");
  	define("WEB_TITLE", "Turbo Course Builder | ");
  	define("DATE_FORMAT", "m/d/Y");
  	define("DATETIME_FORMAT", "m/d/Y h:i a");
  	define("DEFAULT_TIMEZONE", "Asia/Manila");

  	date_default_timezone_set(DEFAULT_TIMEZONE);

  	if(DB_NAME) {
  		$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
  		mysql_select_db(DB_NAME, $connection) or die(mysql_error());
  	}
  	include('include/language.php');
  	include('library.php');
    include('functions.php');
    ?>
