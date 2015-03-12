<?php

    include_once("Db.class.php");

    class Post
    {
        private $m_sText;
        private $m_sUser;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {
                case 'Text':
                    if (strlen($p_vValue)>5)
                    {
                        $this->m_sText = $p_vValue;
                    }
                    else
                    {
                        throw new Exception("Post is niet lang genoeg");
                    }
                    break;

                case 'User':
                    $this->m_sUser = $p_vValue;
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

                case 'User':
                    return $this->m_sUser;
                    break;
            }
        }

        public function save()
        {
            $conn = Db::getInstance();
            // errors doorsturen van de database
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare('INSERT INTO tblpost (text,username) VALUES  ( :text, :username )');

            $statement->bindValue(':text',$this->Text);
            $statement->bindValue(':username',$this->User);
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