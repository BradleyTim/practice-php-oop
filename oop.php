<?php 
	
	class Employee {

		protected $first_name;
		protected $last_name;
		protected $language;

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
	}

	class Manager extends Employee {

		protected $salary;
		protected $emps;

		public function __construct($first_name, $last_name, $language, $salary) {
			Employee::__construct($first_name, $last_name, $language);
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

	echo $man1->get_emps();
?>