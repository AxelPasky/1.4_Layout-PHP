<?php
declare(strict_types=1);

require 'Classes/employee.php';

$employee_1 = new Employee();

$employee_1->initialize("Alex",5400);

$employee_2 = new Employee();

$employee_2->initialize("Ines",7000);



$employee_1->print();
$employee_2->print();




?>