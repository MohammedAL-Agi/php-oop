<?php
class Student
{
	public $id;
	public $name;
	public $email;
	public $mobile_number;

	function __construct($id, $name, $email, $phone_number)
	{
		$this->id 					= $id;
		$this->name 				= $name;
		$this->email 				= $email;
		$this->phone_number = $phone_number;
	}
	function getStudent()
	{
		echo 'ID: ' . $this->id . '<br>';
		echo 'Name: ' . $this->name . '<br>';
		echo 'Email: ' . $this->email . '<br>';
		echo 'Phone Number: ' . $this->phone_number;
	}
}

$student = new Student(123443, 'Mohammed', 'mohammed@orange.org', 962777777777);

$student->getStudent();
echo "<br>";
echo "<br>";
echo "<br>";

class Teacher extends Student
{
	public $salary;
	public $subject;

	function __construct($id, $name, $email, $phone_number, $salary, $subject)
	{
		parent::__construct($id, $name, $email, $phone_number);
		$this->salary = $salary;
		$this->subject = $subject;
	}
	function getTeacher()
	{
		echo 'ID: ' . $this->id . '<br>';
		echo 'Name: ' . $this->name . '<br>';
		echo 'Email: ' . $this->email . '<br>';
		echo 'Phone Number: ' . $this->phone_number . '<br>';
		echo 'Salary: ' . $this->salary . '<br>';
		echo 'Subject: ' .  join(', ', $this->subject) . '<br>';
		//or an array
		//  print_r($this->subject);
	}
}

$teacher = new Teacher(96432, 'Ali', 'ali@orange.org', 962777777777, 1500, ['English', 'Math', 'Chemistry', 'Science']);

$teacher->getTeacher();
