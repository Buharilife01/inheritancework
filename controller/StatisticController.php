<?php


class StatisticController extends MathController{
    public function  mean($num_one,$num_two){
        $sum = new MathController;
         $mean =$sum->addition($num_one,$num_two) / 2;
         return $mean;

    }

}




?>