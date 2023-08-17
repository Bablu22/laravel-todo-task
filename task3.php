<?php

/*
 * Task 3: Design a class to manage employee data, demonstrating encapsulation by setting and getting employee salaries securely.
 */

 class Employee {
    private $name;
    private $salary;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        }
    }
    
    public function getSalary() {
        return $this->salary;
    }
}

$employee = new Employee("John");
$employee->setSalary(50000);
echo $employee->getSalary() . PHP_EOL;
