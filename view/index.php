<?php

include("math_controller.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $x = $_POST["num1"];
    $y = $_POST["num2"];
    $operator = $_POST["operator"];
   
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asetholder/css/boostrap/bootstrap.css">
    <link rel="stylesheet" href="../asetholder/css/maths.css">
    <title>Solve</title>
</head>

<style>

</style>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-12 col-sm-12 col-md-6 d-flex">
                <div class="col-lg-3 ">

                </div>
                <div class="col-lg-9 shadow mt-5">
                    <div class="row">
                        <small class="fs-2 fw-bold  text-center mb-3">Calculate from Maths to statistic mean</small>
                        <div class="col-lg-4 mb-3">

                            <div class="card border-warning mb-3 bg-dark">
                                <div class="card-header text-light  text-center fw-bold fs-3">Answer</div>
                                <div class="card-body text-light">
                                    <?php
                                  

                                    if (!empty($x) && !empty($y)) {
                                        switch ($operator) {
                                            case '+':
                                                $add = new maths();
                                                echo " $x + $y <br> Your answer is " . $add->add($x, $y);


                                                break;


                                            case '-':
                                                $subtract = new maths();
                                                echo "  $x - $y  <br> Your answer is " . $subtract->subtract($x, $y);
                                                break;


                                            case '/':
                                                $divide = new maths();
                                                echo "  $x / $y <br> Your answer is " . $divide->divide($x, $y);
                                                break;

                                            case '*':
                                                $multi = new maths();
                                                echo  "  $x x $y <br> Your answer is " . $multi->multipy($x, $y);
                                                break;
                                            case 'mean':
                                                $mean = new statistic();
                                                echo  "  $x mean $y <br> Your answer is " . $mean->mean($x, $y);
                                                break;
                                            // case 'mode':
                                            //     $mode = new statistic();
                                            //     echo  "  $x mode $y <br> Your answer is " . $mode->mode($x, $y);
                                            //     break;

                                            default:

                                                break;
                                        }
                                       
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card border-primary  bg-dark mb-3"">
                                <div class=" card-header text-light fw-bold text-center fs-">Solve</div>
                            <div class="card-body text-primary">

                                <form action="" method="post">

                                    <label for=""></label>
                                    <input type="number" name="num1" class="form-control border-2 border-warning mb-3">
                                    <select name="operator" class="form-control border-warning border-2" id=""> Operator
                                        <option value="+"> +</option>
                                        <option value="-"> -</option>
                                        <option value="/"> /</option>
                                        <option value="*"> *</option>
                                        <option value="mean"> Mean</option>
                                        

                                    </select>
                                    <label for=""></label>
                                    <input type="number" name="num2" class="form-control border-2 border-warning mb-3">
                                    <button type="submit" name="submit" class="btn btn-warning">
                                        Submit
                                    </button>
                                    <strong></strong>

                                </form>
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