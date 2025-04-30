 <?php
 session_start();
    include "../controller/PythagoController.php";


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num_one = $_POST["num_one"];
        $num_two = $_POST["num_two"];
        $operator = $_POST["operator"];
    }
    ?>



 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../asetholder/css/boostrap/bootstrap.css">
     <link rel="stylesheet" href="../asetholder/css/font-awasome/css/all.css">
     <link rel="stylesheet" href="../asetholder/css/maths.css">
     <title>Pythagorial</title>
     <style>
     .moveinput {
         margin-top: 250px;
     }
     </style>

 </head>

 <body>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="row">
                     <div class="col-lg-3">

                     </div>
                     <div class="col-lg-9 bg-dark mt-5">
                         <div class="row">
                             <div class="col-lg-5">
                                 <div class="card border-success border-2 bg-dark mb-3 mt-5 p-2 ">
                                     <div class="card-header text-success fw-bold text-center border-bottom"><i
                                             class=" fa fa-calculator me-2"></i>PYTHAGORAS </div>
                                     <div class="card-body text-primary">
                                         <div class="smallc text-center"> c</div>
                                         <div class="smalla text-center">a</div>
                                         <div class="smallb text-center">b</div>



                                         <div class="angle bg-danger mt-2 mx-auto">

                                         </div>
                                     </div>
                                     <form action="" method="POST">


                                         <input type="number" id="" name="num_one"
                                             class="form-control moveinput mb-2  border-success border-3 "
                                             placeholder="Enter num one">
                                         <select name="operator" class="form-control border-success border-3 mb-2"
                                             id="">
                                             Operator
                                             <option value="C"> Ab is giving find c</option>
                                             <option value="B"> Ac is given find B</option>
                                             <option value="A"> Bc is given find A</option>

                                         </select>
                                         <input type="number" id="" name="num_two"
                                             class="form-control mb-3  border-success border-3"
                                             placeholder="Enter num two ">


                                         <button type="submit" name="submit" class="btn btn-lg w-50 btn-success  ">
                                             Submit
                                         </button>
                                     </form>
                                 </div>
                             </div>
                             <div class="col-lg-4 mt-5">
                                 <div class="card border-success  border-2 bg-dark mb-3">
                                     <div class="card-header fw-bold text-center  border-bottom text-success">
                                         Answer
                                     </div>
                                     <div class="card-body text-light">
                                         <br>
                                         <?php
                                      
                                            if (!empty($num_one) && !empty($num_two)) {
                                                switch ($operator) {
                                                    case 'C':
                                                        $pythagoria = new  PythagoController();
                                                        

                                                        echo "The Pythagorial theorem of <br> $num_one & $num_two 
                                                         = " . $pythagoria->pathagoriaPlus($num_one, $num_two);


                                                        break;
                                                            case 'B':
                                                        $pythagoria = new  PythagoController();

                                                        echo "The Pythagorial theorem of <br> $num_one & $num_two 
                                                         = " . $pythagoria->pathagoriaMinus($num_one, $num_two);
                                                         break;
                                                    case 'A':
                                                        $pythagoria = new  PythagoController();

                                                        echo "The Pythagorial theorem of <br> $num_one & $num_two 
                                                         = " . $pythagoria->pathagoriaMinus($num_one, $num_two);
                                                        break;




                                                    default:
                                                 
                                                        break;
                                                }
                                            }
                                          

                                            ?>
                                     </div>
                                 </div>
                             </div>


                         </div>
                     </div>
                 </div>
             </div>

         </div>

         <div>
         </div>

 </body>

 </html>