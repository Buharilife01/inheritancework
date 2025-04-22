<?php

class maths
{
    public function add($x, $y)
    {
        $addition = $x + $y;
        return $addition;
    }
    public function subtract($x, $y)
    {
        $substraction = $x - $y;
        return $substraction;
    }
    public function divide($x, $y)
    {
        $division = $x / $y;
        return $division;
    }
    public function multipy($x, $y)
    {
        $multiplication = $x * $y;
        return $multiplication;
    }
}


class statistic extends maths
{
    public function mean($x, $y)
    {

        $sum = new maths;


        $mean = $sum->add($x, $y) / 2;
        return $mean;
    }
   
    
}

?>