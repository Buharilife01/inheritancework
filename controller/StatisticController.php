<?php 
include "";

class StatisticController extends MathController{
    public function  Mean($num1,$num2){
        $sum = new MathController;
         $mean =$sum->Addition($num1,$num2) / 2;
         return $mean;

    }

}




?>