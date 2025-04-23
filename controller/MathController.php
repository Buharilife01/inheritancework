 <?php
  class MathController
  {
    public function Addition($num1, $num2)
    {
      $add = $num1 + $num2;
      return $add;
    }
    public function Substraction($num1, $num2)
    {
      $substract = $num1 - $num2;
      return $substract;
    }
    public function Division($num1, $num2)
    {
      $divide = $num1 / $num2;
      return $divide;
    }
    public function Multiplication($num1, $num2)
    {
      $multiply = $num1 * $num2;
      return $multiply;
    }
  }

   
  ?>