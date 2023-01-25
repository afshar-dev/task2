<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Task2</title>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="col-4">
                <p>example= write: 1,2,3;4,5,6 for {{1,2,3},{4,5,6}}</p>
                <form action="" class="form-control" method="post">
                    <label for="matrix">insert matrix:</label>
                    <input class="form-control" type="text" name="matrix" id="matrix" value=""/>
                    <button class="btn btn-info" type="submit">run</button>
                </form>
            </div>
        </div>
        <div class="col-12 text-center">
            <?php
            if (isset($_POST['matrix'])) {
                $matrix = $_POST['matrix'];
                echo "your Matrix is=";
                $matrix = explode(";", $matrix);
                $firstArray = explode(",", $matrix[0]);
                $secondArray = explode(",", $matrix[1]);
                print_r(json_encode(array($firstArray, $secondArray)));
                echo "<hr>";
                $count = count($firstArray);
                $result = [];
                for ($i = 0; $i < $count; $i++) {
                    array_push($result, array("$firstArray[$i]$secondArray[$i]"));
                }
                echo "Result=";
                print_r(json_encode($result));
            }
            ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>

