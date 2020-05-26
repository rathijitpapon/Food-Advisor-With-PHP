<?php

	class User
	{
		private $name;
		private $password;
		private $email;
		private $phone;
		private $id;

		function __construct($ame, $assword, $mail, $hone, $d)
		{
			$name = $ame;
			$email = $mail;
			$password = $assword;
			$phone = $hone;
			$id = $d;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function getPassword()
		{
			return $this->password;
		}

		public function getPhone()
		{
			return $this->phone;
		}

		public function getId()
		{
			return $this->id;
		}
	}

	class visitor
	{
		private $name;
		private $id;

		function __construct($ame, $d)
		{
			$name = $ame;
			$id = $d;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getId()
		{
			return $this->id;
		}
	}

	class Owner
	{
		private $name;
		private $password;
		private $email;
		private $phone;
		private $id;

		function __construct($ame, $assword, $mail, $hone, $d)
		{
			$name = $ame;
			$email = $mail;
			$password = $assword;
			$phone = $hone;
			$id = $d;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getEmail()
		{
			return $this->email;
		}

		public function getPassword()
		{
			return $this->password;
		}

		public function getPhone()
		{
			return $this->phone;
		}

		public function getId()
		{
			return $this->id;
		}
	}

	class Restaurant
	{
		private $name;
		private $id;

		function __construct($ame, $d)
		{
			$name = $ame;
			$id = $d;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getId()
		{
			return $this->id;
		}
	}
?>