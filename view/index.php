<?php


include("../controller/MathController.php");
//check if the request methos is post method
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
    <title>Solve</title>
</head>

<style>

</style>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class=" col-lg-12 col-sm-12 col-md-6 ">
                <div class="col-lg-3 ">

                </div>
                <div class="col-lg-9 shadow mt-5 mx-auto">
                    <div class="row">
                        <h6 class=" fw-bold  text-center mb-5 "><i class="me-2 fa fa-calculator "></i> Calculate from
                            Maths to statistic Mean</h6>
                        <div class="col-lg-4 mb-3">

                            <div class="card border-warning mb-3 bg-dark mx-2">
                                <div class="card-header text-light  text-center fw-bold fs-3">Answer</div>
                                <div class="card-body text-light">
                                    <?php


                                    if (!empty($num_one) && !empty($num_two)) {
                                        switch ($operator) {
                                            case '+':
                                                $add = new MathController();
                                                echo " $num_one + $num_two <br> Your answer is "
                                                    . $add->addition($num_one, $num_two);


                                                break;


                                            case '-':
                                                $subtract = new MathController();
                                                echo "  $num_one- $num_two  <br> Your answer is "
                                                    . $subtract->substraction($num_one, $num_two);
                                                break;


                                            case '/':
                                                $divide = new MathController();
                                                echo "  $num_one / $num_two <br> Your answer is "
                                                    . $divide->division($num_one, $num_two);
                                                break;

                                           
                                            // case 'mean':
                                            //     $mean = new StatisticController();
                                            //     echo  "  $num_onemean $num2 <br> Your answer is " . $mean->Mean($x, $y);
                                            //     break;
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
                            <div class="card-body text-light fw-bold">

                                <form action="" method="post">

                                    <label for="number" class="mb-2"> First Number</label>
                                    <input type="number" name="num_one"
                                        class="form-control border-2 border-warning mb-2">
                                    <label class="mb-2">Operators</label>
                                    <select name="operator" class="form-control border-warning border-2" id=""> Operator
                                        <option value="+"> add</option>
                                        <option value="-"> -</option>
                                        <option value="/"> /</option>
                                        <option value="*"> *</option>
                                        <option value="mean"> Mean</option>
                                    </select>
                                    <label for="" class="mb-2"> Sec Number</label>
                                    <input type="number" name="num_two"
                                        class="form-control border-2 border-warning mb-2">
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