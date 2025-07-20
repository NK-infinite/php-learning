<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Data Types</title>
</head>

<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container mt-4">
        <h2>PHP Data Types</h2>
        <h6>
            <?Php
            echo
            "=>String <br>
      =>Integer <br>
   =>Float <br>
   =>Boolean <br>
   =>Object <br>
   =>Array <br>
   =>Null"
            ?>

        </h6>
        <?php
        // String
        $str = "Nikhil";
        echo "Value: $str <br>";
        echo "Type: " . gettype($str) . "<br><br>";

        // Integer
        $num = 10;
        var_dump($num);
        echo "<br><br>";

        // Boolean
        $bool = true;
        var_dump($bool);
        echo "<br><br>";

        // Null
        $nullVar = null;
        var_dump($nullVar);
        echo "<br><br>";
        ?>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</html>