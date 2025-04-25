<?php


class StatisticController extends MathController{
    public function  Mean($num_one,$num_two){
        $sum = new MathController;
         $mean =$sum->Addition($num_one,$num_two) / 2;
         return $mean;

    }

}




?>