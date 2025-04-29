 <?php
  class MathController
  {
    public function addition($num_one, $num_two)
    {
      $add = $num_one + $num_two;
      return $add;
    }
    public function substraction($num_one, $num_two)
    {
      $substract = $num_one - $num_two;
      return $substract;
    }
    public function division($num_one, $num_two)
    {
      $divide = $num_one / $num_two;
      return $divide;
    }
    public function multiplication($num_one, $num_two)
    {
      $multiply = $num_one * $num_two;
      return $multiply;
    }
   

    }
  

  //  $num1=readline("Enter number \n");
  //  $result=new MathController();
  //  echo $result->SquareRoot($num1);
  
   
  ?>