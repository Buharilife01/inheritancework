<?php 
include "MathController.php";
class PythagoController extends MathController{
    // findin hypothenus
    public function  pathagoriaPlus($num_one,$num_two){

        $square_one=$num_one **2;
        $square_two=$num_two **2;
        $sum=new MathController;
        $pythagoria= $sum->addition($square_one,$square_two);
        return $pythagoria;

    }
    // finding shorter leg
    public function  pathagoriaMinus($num_one, $num_two)
    {
        $square_one= $num_one ** 2;
        $square_two = $num_two** 2;
        $sum = new MathController;
        $pythagoria = $sum->substraction($square_one, $square_two);
        return $pythagoria;
    }
       
}

// $num_one=readline("Enter number \n:");
// $num_two =readline("Enter Sec number :\n");
// $pytha=new  PythagoController();
// echo $pytha->PathagoriaPlus($num_one,$num_two);

?>