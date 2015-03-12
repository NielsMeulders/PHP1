<?php

    abstract class Voertuig
    {
        private $m_sMerk;
        private $m_iAantalPassagiers;
        private $m_iAantalDeuren;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {
                case "Merk":
                    $this->m_sMerk = $p_vValue;
                    break;

                case "AantalPassagiers":
                    $this->m_iAantalPassagiers = $p_vValue;
                    break;

                case "AantalDeuren":
                    $this->m_iAantalDeuren = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            switch($p_sProperty)
            {
                case "Merk":
                    return $this->m_sMerk;
                    break;

                case "AantalDeuren":
                    return $this->m_iAantalDeuren;
                    break;

                case "AantalPassagiers":
                    return $this->m_iAantalPassagiers;
                    break;
            }
        }

        public function __toString()
        {
            $ret = $this->Merk . " heeft " . $this->AantalDeuren . " deuren en kan " . $this->AantalPassagiers . " passagiers vervoeren.";
            return $ret;
        }

        public function Reserveer()
        {
            $today = date("H");
            if ($today <= 12)
            {

            }
            else
            {
                throw new Exception("U kan maar reserveren tot 12u");
            }
        }


    }

?>

