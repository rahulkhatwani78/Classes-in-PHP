<?php
	class Person
	{
		public $firstname = false;
		public $middlename = false;
		public $lastname = false;

		function get_details()
		{
			if($this->firstname != false)
				echo "$this->firstname ";
			if($this->middlename != false)
				echo "$this->middlename ";
			if($this->lastname != false)
				echo "$this->lastname<br/>";
		}
	}

	$rahul = new Person();
	$hitesh = new Person();

	$rahul->firstname = "Rahul";
	$rahul->middlename = "Anilkumar";
	$rahul->lastname = "Khatwani";

	$hitesh->firstname = "Hitesh";
	$hitesh->middlename = "Anilkumar";
	$hitesh->lastname = "Khatwani";

	$rahul->get_details();
	$hitesh->get_details();
?>
