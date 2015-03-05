<?php

    include_once("User.class.php");
    class Student extends User
    {
        private $m_bIsStudent = true;
        private $m_sEducation;
        private $m_sTwitter;

        public function __set($p_sProperty, $p_vValue)
        {
            parent::__set($p_sProperty, $p_vValue);
            switch ($p_sProperty)
            {
                case "Twitter":
                    $this->m_sTwitter = $p_vValue;
                    break;
            }

        }

        public function __get($p_sProperty)
        {
            $vResult = parent::__get($p_sProperty);
            switch ($p_sProperty)
            {
                case "Twitter":
                    $vResult = $this->m_sTwitter;
                    break;
            }
            return $vResult;
        }

        public function __toString()
        {
            $result = parent::__toString();
            $result .= '<p>'.$this->m_sTwitter.'</p>';
            return $result;
        }

        public function Save()
        {
            // connectie leggen PDO
            $conn = new PDO('mysql:host=localhost;dbname=phples', "root", "root");
            // INSERT
            $statement = $conn->prepare("INSERT INTO Student (firstname, name, twitter) VALUES ( :firstname, :name, :twitter )");
            $statement->bindParam(':firstname', $this->Firstname);
            $statement->bindParam(':name', $this->Name);
            $statement->bindParam(':twitter', $this->Twitter);
            $statement->execute();
        }
    }

?>