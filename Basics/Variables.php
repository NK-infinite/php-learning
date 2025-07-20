<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Variables</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php include '../includes/navbar.php'; ?>

  <div class="container mt-4">

    <h2>PHP Variables</h2>
    <ul>
      <li>
        $_name = "Nikhil" <br>
      </li>
      <li>
        $_Income = 60000
      </li>
    </ul>

    <h2>Variable Rules:</h2>
    <ul>
      <li>Starts with a $ sign</li>
      <li>Cannot start with a number</li>
      <li>Must start with a letter or an underscore character</li>
      <li>Can only contain alphanumeric characters and underscores</li>
      <li>Variables are case-sensitive ($Nikhil ≠ $nikhil)</li>
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>