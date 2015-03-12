<?php

    include_once("Db.class.php");

    class Post
    {
        private $m_sText;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {
                case 'Text':
                    $this->m_sText = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            switch($p_sProperty)
            {
                case 'Text':
                    return $this->m_sText;
                    break;
            }
        }

        public function save()
        {
            $conn = Db::getInstance();
            // errors doorsturen van de database
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare('INSERT INTO tblpost ( text ) VALUES  ( :text )');

            $statement->bindValue(':text',$this->Text);
            $statement->execute();
        }

        public function getAll()
        {
            $conn = Db::getInstance();
            $allposts = $conn->query("SELECT * FROM tblpost");
            return $allposts;
        }


    }


?>