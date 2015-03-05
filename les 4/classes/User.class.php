<?php 

	/**
	* 
	*/

    include("classes/iPerson.class.php");

	abstract class User implements iPerson
	{
		private $m_sName;
		private $m_sFirstname;
		private $m_sEmail;
		private $m_sPassword;

		public function __set($p_sProperty,$p_vValue)
		{
            switch($p_sProperty)
            {
                case "Name":
                    $this->m_sName = $p_vValue;
                    break;

                case "Firstname":
                    $this->m_sFirstname = $p_vValue;
                    break;

                case "Email":
                    $this->m_sEmail = $p_vValue;
                    break;

                case "Password":
                    if(strlen($p_vValue) < 5)
                    {
                        throw new Exception("Password is too short!");
                    }
                    else
                    {
                        $this->m_sPassword = $p_vValue;
                    }
                    break;
            }
		}

        public function __get($p_sProperty)
        {
            switch($p_sProperty)
            {
                case "Name":
                    return $this->m_sName;
                    break;

                case "Firstname":
                    return $this->m_sFirstname;
                    break;

                case "Email":
                    return $this->m_sEmail;
                    break;

                case "Password":
                    return $this->m_sPassword;
                    break;
            }
        }

        public function __toString()
        {
            $result = "<h1>".$this->m_sFirstname."</h1>";
            $result .= "<h1>".$this->m_sName."</h1>";
            $result .= "<p>".$this->m_sPassword."</p>";
            $result .= "<p>".$this->m_sEmail."</p>";
            return $result;
        }

        public function Save()
        {
            echo "functie om gewone user te saven";
        }

	}

 ?>