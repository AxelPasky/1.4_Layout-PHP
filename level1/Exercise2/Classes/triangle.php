<?php
declare(strict_types=1);
require_once 'Shape.php';

class Triangle extends Shape{

    public function area():float{
        $area=($this->height*$this->width)/2;

        return $area;   
     }
}

?>