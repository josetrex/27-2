<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['a'], $_GET['b'], $_GET['c'], $_GET['d'], $_GET['e'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $_GET['d'];
    $e = $_GET['e'];
    echo "<p>Values received: $a, $b, $c, $d, $e</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Form</title>
</head>
<body>
    <form method="get" action="form.php">
        <label for="a">Number A:</label>
        <input type="number" name="a" required><br>
        
        <label for="b">Number B:</label>
        <input type="number" name="b" required><br>
        
        <label for="c">Number C:</label>
        <input type="number" name="c" required><br>
        
        <label for="d">Number D:</label>
        <input type="number" name="d" required><br>
        
        <label for="e">Number E:</label>
        <input type="number" name="e" required><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
