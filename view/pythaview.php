 <?php

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
         .smallc {
             width: 20%;
             position: absolute;
             background-color: wheat;
             top: 130px;
             left: 240px;
         }

         .smalla {
             width: 20%;
             position: absolute;
             top: 130px;
             left: 20px;
             background-color: wheat;
         }

         .moveinput {
             margin-top: 250px;
         }

         .smallb {
             width: 20%;
             position: absolute;
             border-top-right-radius: 20px !important;
             border-top-left-radius: 20px !important;
             background-color: wheat;
             top: 260px;
             left: 140px;
         }
     </style>


 </head>

 <body>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="row">
                     <div class="col-lg-3">
                         <div class="list-group list-group-flush mt-5 ">
                             <a href="index.php" class="list-group-item list-group-item-action fw-bold ">
                                 <i class=" fas fa-warehouse text-success me-3 fa-2x"></i>Arithmetic Operators
                             </a>
                             <a href="pythaview.php" class="list-group-item list-group-item-action fw-bold">
                                 <i class="fab fa-accusoft  fa-2x me-3 text-success "></i>Pythagoras Theorem
                                 <sup class="fw-bold">2</sup>
                             </a>


                         </div>

                         <div class="list">

                         </div>

                     </div>
                     <div class="col-lg-9 bg-dark mt-5">
                         <div class="row">
                             <div class="col-lg-5">
                                 <div class="card border-success border-2 bg-dark mb-3 mt-5 p-2 ">
                                     <div class="card-header text-success fw-bold text-center border-bottom fw-bold">
                                         <i class=" fa fa-calculator me-2"></i> PYTHAGORAS
                                     </div>
                                     <div class="card-body text-primary">
                                         <div class="smallc text-center"> <i class="fa fa-eye"></i> c</div>
                                         <div class="smalla text-center"> <i class="fa fa-eye "></i>a</div>
                                         <div class="smallb text-center">
                                             <i class="fa fa-teeth-open fa-1x"></i> b
                                         </div>



                                         <div class=" angle bg-danger mt-2 mx-auto">

                                         </div>
                                     </div>
                                     <form action="" method="POST">
                                         <input type="number" id="" name="num_one"
                                             class="form-control moveinput mb-2  border-success border-3 "
                                             placeholder="First Number">
                                         <select name="operator" class="form-control border-success border-3 mb-2"
                                             id="">
                                             Operator
                                             <option value="operator"> Operator </option>
                                             <option value="C"> Ab is giving find c</option>
                                             <option value="B"> Ac is given find B</option>
                                             <option value="A"> Bc is given find A</option>

                                         </select>
                                         <input type="number" id="" name="num_two"
                                             class="form-control mb-3  border-success border-3"
                                             placeholder="Second Number">


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