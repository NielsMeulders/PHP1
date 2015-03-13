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
                    if ($p_vValue <= 6 && $p_vValue >=1)
                    {
                        $this->m_iAantalPassagiers = $p_vValue;
                    }
                    else
                    {
                        throw new Exception("Aantal passagiers kan niet " . $p_vValue . " zijn!");
                    }
                    break;

                case "AantalDeuren":
                    if ($p_vValue <= 5 && $p_vValue >= 2)
                    {
                        $this->m_iAantalDeuren = $p_vValue;
                    }
                    else
                    {
                        throw new Exception("Aantal deuren kan niet " . $p_vValue . " zijn!");
                    }
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
            if ($today < 12)
            {
                $feedback =     "Reservatie voor: <br>
                                Merk: " . $this->Merk . "<br>
                                Aantal passagiers: " . $this->AantalPassagiers . "<br>
                                Aantal deuren: " . $this->AantalDeuren;
                echo $feedback;
            }
            else
            {
                throw new Exception("U kan maar reserveren tot 12u!");
            }
        }

    }

?>

