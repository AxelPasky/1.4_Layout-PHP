<?php
declare(strict_types=1);
require_once 'Shape.php';

class Rectangle extends Shape{

    function area():float {
        $area=$this->height*$this->width;

        return $area;   
     }
}

?>