 <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // a
        $num_one = $_POST["num_one"];
        // a

        // b
        $num_two = $_POST["num_two"];
        // b

        // c
        $num_three = $_POST["num_three"];
        // c




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
                                             class=" fa fa-calculator me-2"></i>PYTHAGORIA </div>
                                     <div class="card-body text-primary">
                                         <div class="smallc text-center"> c</div>
                                         <div class="smalla text-center">a</div>
                                         <div class="smallb text-center">b</div>



                                         <div class="angle bg-danger mt-2 mx-auto">

                                         </div>
                                     </div>



                                     <form action="" method="POST">


                                         <input type="number" id="" name="numOne"
                                             class="form-control moveinput mb-2  border-success border-3 "
                                             placeholder="Enter num one">
                                         <select name="operator" class="form-control border-success border-3 mb-2"
                                             id="">
                                             Operator
                                             <option value=""> </option>
                                             <option value="+"> Ab is given find C</option>
                                             <option value="+"> Ac is given find B</option>
                                             <option value="+"> Bc is given find A</option>

                                         </select>
                                         <input type="number" id="" name="numTwo"
                                             class="form-control mb-3  border-success border-3"
                                             placeholder="Enter num two ">


                                         <input type="button" value="Solution" name="submit"
                                             class="btn  btn-lg w-50 btn-success  ">
                                     </form>
                                 </div>
                             </div>
                             <div class="col-lg-4 mt-5">
                                 <div class="card border-success  border-2 bg-dark mb-3" style="max-width: 18rem;">
                                     <div class="card-header fw-bold text-center  border-bottom text-success">
                                         Answer
                                     </div>
                                     <div class="card-body text-primary">
                                         Working here





                                     </div>
                                 </div>
                             </div>


                         </div>
                     </div>
                 </div>
             </div>

         </div>

     </div>
     </div>

 </body>

 </html>