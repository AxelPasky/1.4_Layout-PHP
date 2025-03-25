<?php
declare(strict_types=1);

require 'Classes/employee.php';

$employee_1 = new Employee("Alex",4000);
$employee_2 = new Employee("Vera",6000);


echo $employee_1->print();
echo $employee_2->print();




?>