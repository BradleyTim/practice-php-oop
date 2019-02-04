<?php 
	
	class Employee {

		protected $first_name;
		protected $last_name;
		protected $language;
		protected static $age = '18 and above';

		public function __construct($first_name, $last_name, $language) {
			echo __CLASS__ ." created successfully.<br>";
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->language = $language;
		}

		public function get_first_name() {
			return $this->first_name.'<br>';
		}

		public function set_first_name($name) {
			$this->first_name = $name;
		}

		public static function age_limit() {
			return self::$age.'<br>';
		}

		public function __get($property) {
			if(property_exists($this, $property)) {
				return $this->$property;
			}
		}

		public function __set($property, $value) {
			if(property_exists($this, $property)) {
				$this->property = $value;
			}

			return $this;
		}
	}

	class Manager extends Employee {

		protected $salary;
		protected $emps;
		public static $education = 'MBA';

		public function __construct($first_name, $last_name, $language, $salary) {
			parent::__construct($first_name, $last_name, $language);
			$this->salary = $salary;
		}

		public function set_emps($emp) {
			$this->emps[] = $emp;
		}

		public function get_emps() {
			print_r($this->emps);
		}


	}

	$emp1 = new Employee('gift', 'loren', 'python');
	$emp2 = new Employee('brad', 'ess', 'java');

	$emp1->set_first_name('Awuor');

	$man1 = new Manager('Stein', 'mbu', 'php', 3000);
	$man1->set_emps($emp1);
	$man1->set_emps($emp2);

	// echo Manager::$education;
	// echo $man1->get_emps();
	// echo Manager::age_limit();
	// $emp1->__set('first_name', 'Stein');
	// echo $emp1->__get('first_name');
?>