<?php 
include "MathController.php";
class PythagoController extends MathController{
    // findin hypothenus
    public function  Pathagoria($num1,$num2){

        $sqareOne=$num1 **2;
        $squareTwo=$num2 **2;
        $sum=new MathController;
        $Pythagoria= $sum->Addition($sqareOne,$squareTwo);
        return $Pythagoria;

    }
    // finding shorter leg
    public function  PathagoriaMinus($num1, $num2)
    {
        $sqareOne = $num1 ** 2;
        $squareTwo = $num2 ** 2;
        $sum = new MathController;
        $Pythagoria = $sum->Substraction($sqareOne, $squareTwo);
        return $Pythagoria;
    }
       
}

$num1=readline("Enter number \n:");
$num2 =readline("Enter Sec number :\n");
$pytha=new  PythagoController();
echo $pytha->PathagoriaMinus($num1,$num2);

?>