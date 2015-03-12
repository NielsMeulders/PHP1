<?php


    class Db
    {

        private static $db; // static = wijzigt niet per object

        public static function getInstance()
        {
            // static = geen object nodig om aan te roepen
            // niet: new db();...
            if (self::$db === null)
            {
                //echo "new connection";
                self::$db = new PDO('mysql:host=localhost;dbname=phples','root', 'root');
                return self::$db;
            }
            else
            {
                //echo "same connection";
                return self::$db;
            }

        }

    }


?>