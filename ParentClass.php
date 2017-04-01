<?php
	// This is the file for the parent class

	class Work {
		public $name = "";
		public $place = "";
		public $days = 0;
		public $hours = 0;

		public function __construct($name, $place, $days, $hours) {
      $this->name = $name;
      $this->place = $place;
      $this->days = $days;
      $this->hours = $hours;
    }

		public function setName($name){
			$this->name = $name;
		}
		public function setPlace($place){
			$this->place = $place;
		}

		public function setDays($days){
			$this->days = $days;
		}

		public function setHours($hours){
			$this->hours = $hours;
		}

		public function getDays(){
			return $this->days;
		}

		public function getHours(){
			return $this->hours;
		}
		public function getName(){
			return $this->name;
		}

		public function __toString() {
      $outName = "Name: " . $this->name;
			$outPlace = "Place: ". $this->place;
			$outDays = "Days per week: ". $this->days;
			$outHours = "Hours per day: ". $this->hours;
      return $outName. "<br>" . $outPlace . "<br>" . $outDays . "<br>" . $outHours . "<br>";
    }


	}
