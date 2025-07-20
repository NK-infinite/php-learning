<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* code {
            background-color: #000000ff;
            padding: 4px 6px;
            display: inline-block;
            margin: 4px 0;
        } */
        code {
            background-color: #212529;
            color: #f8f9fa;
      display: block;
      padding: 10px 15px;
      border-radius: 5px;
      margin-top: 8px;
      font-size: 0.95rem;
    }
        .section {
            margin-bottom: 30px;
        }
        pre {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <?php include '../includes/navbar.php'; ?>

   <div class="container mt-4">
        <h2 class="mb-4">String Functions in PHP</h2>

        <?php 
            $name = "Harry is a good boy";
        ?>

        <div class="section">
            <h4>Original String:</h4>
            <code><?php echo $name; ?></code>
            <p>This is the original string that will be used throughout all examples below.</p>
        </div>

        <div class="section">
            <h4>1.- Length of the String</h4>
            <p>This function returns the total number of characters in a string (including spaces).</p>
            <p><strong>Code:</strong> <code>strlen($name)</code></p>
            <p><strong>Output:</strong> <?php echo strlen($name); ?></p>
        </div>

        <div class="section">
            <h4>2.- Word Count</h4>
            <p>This function counts the number of words in the string.</p>
            <p><strong>Code:</strong> <code>str_word_count($name)</code></p>
            <p><strong>Output:</strong> <?php echo str_word_count($name); ?></p>
        </div>

        <div class="section">
            <h4>3. <code>strrev()</code> - Reverse the String</h4>
            <p>This function reverses the order of characters in a string.</p>
            <p><strong>Code:</strong> <code>strrev($name)</code></p>
            <p><strong>Output:</strong> <?php echo strrev($name); ?></p>
        </div>

        <div class="section">
            <h4>4. <code>strpos()</code> - Search for a Word</h4>
            <p>This function returns the position of the first occurrence of a substring within a string. Returns <code>false</code> if not found.</p>
            <p><strong>Code:</strong> <code>strpos($name, "is")</code></p>
            <p><strong>Output:</strong> <?php echo strpos($name, "is"); ?></p>
        </div>

        <div class="section">
            <h4>5. <code>str_replace()</code> - Replace a Word</h4>
            <p>This function replaces all occurrences of a word within the string with another word.</p>
            <p><strong>Code:</strong> <code>str_replace("Harry", "Rohan", $name)</code></p>
            <p><strong>Output:</strong> <?php echo str_replace("Harry", "Rohan", $name); ?></p>
        </div>

        <div class="section">
            <h4>6. <code>str_repeat()</code> - Repeat a String</h4>
            <p>This function repeats the string a given number of times.</p>
            <p><strong>Code:</strong> <code>str_repeat($name, 3)</code></p>
            <p><strong>Output:</strong> <?php echo str_repeat($name . " | ", 3); ?></p>
        </div>

        <div class="section">
            <h4>7. <code>rtrim()</code> - Trim from Right</h4>
            <p>This function removes whitespace (or other characters) from the end (right side) of a string.</p>
            <pre><?php echo rtrim("    this is a good boy     "); ?></pre>
        </div>

        <div class="section">
            <h4>8. <code>ltrim()</code> - Trim from Left</h4>
            <p>This function removes whitespace (or other characters) from the beginning (left side) of a string.</p>
            <pre><?php echo ltrim("    this is a good boy     "); ?></pre>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
