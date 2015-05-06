<?php
	abstract class Db
	{
		private static $conn = NULL;

		public static function getInstance() {
		    if(!isset(self::$conn)) {
		      self::$conn = new PDO('mysql:host=localhost; dbname=phples', 'root', 'root');	
		    }
		    return self::$conn;
  		}
	}
?>