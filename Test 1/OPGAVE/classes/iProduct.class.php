<?php
	interface iProduct
	{
		public function Create();
		public function GetAll();
		public function __set($p_sProperty, $p_vValue);
		public function __get($p_sProperty);
		public function CheckNewAmount();
		public function CheckSecondHandAmount();
	}