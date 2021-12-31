<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php

        $start = $end = 0;
        $start = $_POST['start'];
        $end   = $_POST['end'];
        $multiply = $_POST['multiply'];
    ?>

    <div class="w-50 m-auto mt-5 shadow-lg bg-light p-5 rounded">
        <h4>
            <?php 
                if($start <= $end){
                    for($start; $start <= $end; $start++){
                        $square = $start * $start;
                        $cube = $start * $start * $start;
                        if($multiply == 'Square'){
                            echo "Square of ", $start . " is ", $square;
                            echo "<br>";
                        }
                        else{
                            echo "Cube of ", $start . " is ", $cube;
                            echo "<br>";
                        }
                    }
                }
                else{
                    for($start; $start >= $end; $start--){
                        $square = $start * $start;
                        $cube = $start * $start * $start;
                        if($multiply == 'Square'){
                            echo "Square of ", $start . " is ", $square;
                            echo "<br>";
                        }
                        elseif($multiply == 'Cube'){
                            echo "Cube of ", $start . " is ", $cube;
                            echo "<br>";
                        }
                        else{
                            echo 'None';
                        }
                    }
                } ?>
        </h4>
        <a href="http://localhost/learn%20php/squareCube/" class="btn btn-info mt-3">Try Again</a>
    </div>
</body>
</html>