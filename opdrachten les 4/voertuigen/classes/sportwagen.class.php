<?php

    include_once("voertuig.class.php");

    class sportwagen extends voertuig
    {
        private $m_bStereoInstallatie;

        public function __toString()
        {
            $ret = $this->Merk . " heeft " . $this->AantalDeuren . " deuren en kan " . $this->AantalPassagiers . " passagiers vervoeren.";
            return $ret;
        }

    }

?>