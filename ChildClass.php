<?php
	// this file will extend PArentClass.php


	class WorkPluss extends Work {
		public $Product = 0;
		function __construct($name, $place, $days, $hours)
		{
			parent::__construct($name, $place, $days, $hours);
		}

		public function multiply_value(){
		  $this->Product = $this->getDays() * $this->getHours();
		}

		public function __toString(){
			$output = "Hello, ". $this->getName(). " You Worked a Total of ". $this->Product. " Hours.";
      return $output;
		}



	}
