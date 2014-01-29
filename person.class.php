<?php

	class Person
	{
		private $first_name;
		private $last_name;

		public function __construct($first, $last)
		{
			$this->{'first_name'} = $first;
			$this->{'last_name'} = $last;
		}

		public function toString()
		{
			return $this->{'first_name'}.' '.$this->{'last_name'};
		}
	}
?>