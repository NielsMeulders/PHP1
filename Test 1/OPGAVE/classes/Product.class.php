<?php
	include_once("iProduct.class.php");
    include_once('Db.class.php');
	class Product implements iProduct
	{
		private $m_sName;			// Product X
		private $m_iHowMany; 		// 5
		private $m_sType;			// laptops

		public function __set($p_sProperty, $p_vValue)
		{
			switch ($p_sProperty) {
				case 'Name':
                    if ($p_vValue != "")
                    {
                        $this->m_sName = $p_vValue;
                    }
					else
                    {
                        throw new Exception("Geef een naam in!");
                    }
					break;
				
				case 'HowMany':
                    if ($p_vValue>0)
                    {
                        $this->m_iHowMany = $p_vValue;
                    }
					else
                    {
                        throw new Exception("Aantal moet groter zijn dan 0");
                    }
					break;

				case 'Type':
					$this->m_sType = $p_vValue;
                    if ($this->m_sType == "new")
                    {
                        $this->CheckNewAmount();
                    }
                    elseif ($this->m_sType == "return")
                    {
                        $this->CheckSecondHandAmount();
                    }
					break;				
			}
		}

		public function __get($p_sProperty)
		{
			switch($p_sProperty)
			{
				case 'Name':
					return($this->m_sName);
					break;

				case 'HowMany':
					return($this->m_iHowMany);
					break;

				case 'Type':
					return($this->m_sType);
					break;
			}
		}

		public function CheckNewAmount()
		{
			// this function should validate if new products have a max amount of 20
            if ($this->HowMany>20)
            {
                throw new Exception("Maximaal 20 nieuwe producten per keer aub.");
            }
		}

		public function CheckSecondHandAmount()
		{
			// this function should validate if second hand (returned) products have a max amount of 4
            if ($this->HowMany>5)
            {
                throw new Exception("Maximaal 5 tweedehandsproducten per keer aub.");
            }
		}

		public function Create()
		{
			// this function should save the order to the database
            $conn = Db::getInstance();
            // errors doorsturen van de database
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = $conn->prepare('INSERT INTO OOPtblorders_v9 ( name,
                                                                        howmany,
                                                                        type)
                                                              VALUES  ( :name,
                                                                        :howmany,
                                                                        :type
                                                                        )');

            $statement->bindValue(':name',$this->Name);
            $statement->bindValue(':howmany',$this->HowMany);
            $statement->bindValue(':type',$this->Type);
            $statement->execute();
		}

		public function GetAll()
		{
			// this function should get all the orders from the database
            $conn = Db::getInstance();
            $allProducts = $conn->query("SELECT * FROM OOPtblorders_v9");
            return $allProducts;
		}
	}


?>