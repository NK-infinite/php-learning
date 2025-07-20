<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Data Types</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    code {
      background-color: #212529;
      color: #f8f9fa;
      display: block;
      padding: 10px 15px;
      border-radius: 5px;
      margin-top: 8px;
      font-size: 0.95rem;
    }

    h3 {
      margin-top: 30px;
    }
  </style>
</head>

<body>
  <?php include '../includes/navbar.php'; ?>

  <div class="container mt-5">
    <h2 class="mb-4">PHP Data Types</h2>

   <?php
        echo 
            "=>String <br>
             =>Integer <br>
             =>Float <br>
             =>Boolean <br>
             =>Object <br>
             =>Array <br>
             =>Null";
        ?>

    <h3>
    1. String</h3>
    A string is a sequence of characters, enclosed in quotes.
    
    <code>$name = "Nikhil";</code>

    <h3>
    2. Integer
    </h3>
   
    Integer holds whole numbers, positive or negative, without decimals.
    <code>$age = 21;</code>

    <h3>
    3. Float 
    </h3>
    Floats are numbers with decimal points or in exponential form.
    <code>$price = 99.99;</code>

    <h3>4. Boolean</h3>
    Boolean represents two possible values: true or false.
    <code>$isOnline = true;</code>

    <h3>5. Array</h3>
    An array stores multiple values in one variable.
    <code>$colors = array("red", "green", "blue");</code>

    <h3>6. Object</h3>
    Objects are instances of classes, which can hold both data and functions.
    <code>
      class Car {<br>
      public $color = "red";<br>
      }<br><br>
      $myCar = new Car();
    </code>

    <h3>7. NULL</h3>
    NULL represents a variable with no value.
    <code>$x = NULL;</code>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
