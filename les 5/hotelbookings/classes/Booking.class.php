<?php

    include_once('Db.class.php');
    class Booking
    {
        private $m_sFirstName;
        private $m_sLastName;
        private $m_sHotel;
        private $m_iCheckinDay;
        private $m_iCheckinMonth;
        private $m_iCheckoutDay;
        private $m_iCheckoutMonth;

        public function __set($p_sProperty, $p_vValue)
        {
            switch ($p_sProperty)
            {
                case 'FirstName':
                    if($p_vValue == "")
                    {
                        throw new Exception("Gelieve de Voornaam in te vullen");
                    }
                    else
                    {
                        $this->m_sFirstName = $p_vValue;
                    }
                    break;

                case 'LastName':
                    $this->m_sLastName = $p_vValue;
                    break;

                case 'Hotel':
                    $this->m_sHotel = $p_vValue;
                    break;

                case 'CheckinDay':
                    $this->m_iCheckinDay = $p_vValue;
                    break;

                case 'CheckinMonth':
                    $this->m_iCheckinMonth = $p_vValue;
                    break;

                case 'CheckoutDay':
                    $this->m_iCheckoutDay = $p_vValue;
                    break;

                case 'CheckoutMonth':
                    $this->m_iCheckoutMonth = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            switch ($p_sProperty)
            {
                case 'FirstName':
                    return $this->m_sFirstName;
                    break;

                case 'LastName':
                    return $this->m_sLastName;
                    break;

                case 'Hotel':
                    return $this->m_sHotel;
                    break;

                case 'CheckinDay':
                    return $this->m_iCheckinDay;
                    break;

                case 'CheckinMonth':
                    return $this->m_iCheckinMonth;
                    break;

                case 'CheckoutDay':
                    return $this->m_iCheckoutDay;
                    break;

                case 'CheckoutMonth':
                    return $this->m_iCheckoutMonth;
                    break;
            }
        }

        public function Save()
        {

            if ($this->checkDates())
            {
                $conn = Db::getInstance();
                // errors doorsturen van de database
                // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $statement = $conn->prepare('INSERT INTO tblhotelbookings ( booking_first_name,
                                                                        booking_last_name,
                                                                        booking_hotel,
                                                                        booking_from_day,
                                                                        booking_from_month,
                                                                        booking_to_day,
                                                                        booking_to_month)
                                                              VALUES  ( :firstname,
                                                                        :lastname,
                                                                        :hotel,
                                                                        :from_day,
                                                                        :from_month,
                                                                        :to_day,
                                                                        :to_month
                                                                        )');

                $statement->bindValue(':firstname',$this->FirstName);
                $statement->bindValue(':lastname',$this->LastName);
                $statement->bindValue(':hotel',$this->Hotel);
                $statement->bindValue(':from_day',$this->CheckinDay);
                $statement->bindValue(':from_month',$this->CheckinMonth);
                $statement->bindValue(':to_day',$this->CheckoutDay);
                $statement->bindValue(':to_month',$this->CheckoutMonth);
                $statement->execute();

            }
            else
            {
                throw new Exception("You must check-in before the check-out day");
            }


        }

        private function checkDates()
        {
            $ret = false;
            if ($this->CheckoutMonth > $this->CheckinMonth)
            {
                $ret = true;
            }
            elseif ($this->CheckoutMonth == $this->CheckinMonth)
            {
                if ($this->CheckoutDay > $this->CheckinDay)
                {
                    $ret = true;
                }
            }
            return $ret;
        }

        public function getAll()
        {
            // this method returns all bookings

            $conn = Db::getInstance();
            $allBookings = $conn->query("SELECT * FROM tblhotelbookings");
            return $allBookings;

        }

    }

?>