<?php

    interface iPerson
    {
        public function __get($p_sProperty);
        public function __set($p_sProperty, $p_vValue);
        public function __toString();
        public function Save();
    }

?>